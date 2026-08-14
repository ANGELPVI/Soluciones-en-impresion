<?php

namespace App\Http\Controllers;

use App\Models\carrito;
use App\Models\Consumibles;
use App\Models\Impresora;
use App\Models\ProductosOficina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $items = carrito::where('userId', auth()->id())
            ->whereNotNull('product_type')
            ->orderBy('id', 'desc')
            ->get()
            ->map(function ($item) {
                $product = $this->findProduct($item->product_type, $item->product_id);
                $item->available_stock = $product ? $product->stock : 0;
                $item->subtotal_cents = $this->moneyToCents($item->precio_unitario) * $item->cantidad;

                return $item;
            });

        $totalCents = $items->sum('subtotal_cents');

        return view('cart.index', [
            'items' => $items,
            'totalCents' => $totalCents,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_type' => 'required|in:impresora,consumible,oficina',
            'product_id' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1|max:99',
        ]);

        try {
            DB::transaction(function () use ($data) {
                $product = $this->productQuery($data['product_type'])
                    ->whereKey($data['product_id'])
                    ->lockForUpdate()
                    ->firstOrFail();

                if ($product->stock < $data['quantity']) {
                    abort(422, 'No hay suficiente stock disponible para agregar esa cantidad.');
                }

                $item = carrito::where('userId', auth()->id())
                    ->where('product_type', $data['product_type'])
                    ->where('product_id', $product->id)
                    ->lockForUpdate()
                    ->first();

                $product->stock -= $data['quantity'];
                $product->save();

                $unitPriceCents = $this->moneyToCents($product->precio);
                $quantity = ($item ? $item->cantidad : 0) + $data['quantity'];

                if (!$item) {
                    $item = new carrito();
                    $item->userId = auth()->id();
                    $item->product_type = $data['product_type'];
                    $item->product_id = $product->id;
                }

                $item->productos = [
                    'titulo' => $this->productTitle($product, $data['product_type']),
                    'imagen' => $product->img,
                    'tipo' => $data['product_type'],
                    'producto_id' => $product->id,
                ];
                $item->titulo = $this->productTitle($product, $data['product_type']);
                $item->imagen = $product->img;
                $item->precio_unitario = $this->centsToMoney($unitPriceCents);
                $item->cantidad = $quantity;
                $item->total = $this->centsToMoney($unitPriceCents * $quantity);
                $item->save();
            });
        } catch (\Symfony\Component\HttpKernel\Exception\HttpException $exception) {
            return back()->withErrors(['cart' => $exception->getMessage()]);
        }

        return redirect()->route('carrito.index')->with('cart_success', 'Producto agregado al carrito.');
    }

    public function update(Request $request, carrito $item)
    {
        $data = $request->validate([
            'quantity' => 'required|integer|min:0|max:99',
        ]);

        if ($item->userId !== auth()->id()) {
            abort(403);
        }

        try {
            DB::transaction(function () use ($item, $data) {
                $item = carrito::whereKey($item->id)->lockForUpdate()->firstOrFail();
                $product = $this->productQuery($item->product_type)
                    ->whereKey($item->product_id)
                    ->lockForUpdate()
                    ->firstOrFail();

                $newQuantity = $data['quantity'];
                $difference = $newQuantity - $item->cantidad;

                if ($difference > 0 && $product->stock < $difference) {
                    abort(422, 'No hay suficiente stock disponible para aumentar esa cantidad.');
                }

                if ($difference > 0) {
                    $product->stock -= $difference;
                } elseif ($difference < 0) {
                    $product->stock += abs($difference);
                }

                $product->save();

                if ($newQuantity === 0) {
                    $item->delete();
                    return;
                }

                $unitPriceCents = $this->moneyToCents($item->precio_unitario);
                $item->cantidad = $newQuantity;
                $item->total = $this->centsToMoney($unitPriceCents * $newQuantity);
                $item->save();
            });
        } catch (\Symfony\Component\HttpKernel\Exception\HttpException $exception) {
            return back()->withErrors(['cart' => $exception->getMessage()]);
        }

        return back()->with('cart_success', 'Carrito actualizado.');
    }

    public function destroy(carrito $item)
    {
        if ($item->userId !== auth()->id()) {
            abort(403);
        }

        DB::transaction(function () use ($item) {
            $item = carrito::whereKey($item->id)->lockForUpdate()->firstOrFail();
            $product = $this->findProductForUpdate($item->product_type, $item->product_id);

            if ($product) {
                $product->stock += $item->cantidad;
                $product->save();
            }

            $item->delete();
        });

        return back()->with('cart_success', 'Producto eliminado del carrito.');
    }

    private function productQuery($type)
    {
        return $this->productClass($type)::query();
    }

    private function productClass($type)
    {
        return [
            'impresora' => Impresora::class,
            'consumible' => Consumibles::class,
            'oficina' => ProductosOficina::class,
        ][$type];
    }

    private function findProduct($type, $id)
    {
        return $this->productClass($type)::find($id);
    }

    private function findProductForUpdate($type, $id)
    {
        return $this->productQuery($type)->whereKey($id)->lockForUpdate()->first();
    }

    private function productTitle($product, $type)
    {
        if ($type === 'oficina') {
            return trim($product->marca . ' ' . $product->nombre);
        }

        return trim($product->marca . ' ' . $product->modelo);
    }

    private function moneyToCents($amount)
    {
        return (int) round(((float) $amount) * 100);
    }

    private function centsToMoney($cents)
    {
        return number_format($cents / 100, 2, '.', '');
    }
}
