<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App;
class pageController extends Controller
{
    //
    public function inicio(){
        return view('pages.inicio');
    }

    public function impresoras(){
        $impresoras= App\Models\Impresora::all();
        return view('products.impresoras',compact('impresoras'));
    }


    public function consumibles(){
        $consumibles=App\Models\Consumibles::all();
        return view('products.consumibles',compact('consumibles'));
    }
    public function oficina(){
        $productosOficina = App\Models\ProductosOficina::all();
        return view('products.oficina',compact('productosOficina'));
    }

    public function showImpresora($id){
        $producto = App\Models\Impresora::findOrFail($id);

        return view('products.show', $this->buildProductViewData(
            $producto,
            'impresora',
            route('impresoras'),
            $producto->marca . ' ' . $producto->modelo,
            $producto->Descripcion
        ));
    }

    public function showConsumible($id){
        $producto = App\Models\Consumibles::findOrFail($id);

        return view('products.show', $this->buildProductViewData(
            $producto,
            'consumible',
            route('consumibles'),
            $producto->marca . ' ' . $producto->modelo,
            $producto->descripcion
        ));
    }

    public function showOficina($id){
        $producto = App\Models\ProductosOficina::findOrFail($id);

        return view('products.show', $this->buildProductViewData(
            $producto,
            'oficina',
            route('oficina'),
            $producto->marca . ' ' . $producto->nombre,
            $producto->descripcion
        ));
    }

    private function buildProductViewData($producto, $tipo, $backUrl, $titulo, $descripcion){
        $imagenes = collect([$producto->img]);

        if (Schema::hasTable('product_images')) {
            $imagenesExtra = App\Models\ProductImage::where('product_type', $tipo)
                ->where('product_id', $producto->id)
                ->orderBy('position')
                ->pluck('image_url');

            $imagenes = $imagenes->merge($imagenesExtra);
        }

        return [
            'producto' => $producto,
            'tipo' => $tipo,
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'caracteristicas' => $this->parseCaracteristicas($descripcion),
            'imagenes' => $imagenes->filter()->unique()->values(),
            'backUrl' => $backUrl,
            'productosRelacionados' => $this->getRelatedProducts($tipo, $producto->id),
        ];
    }

    private function getRelatedProducts($tipo, $productoId){
        if ($tipo === 'impresora') {
            return App\Models\Impresora::where('id', '!=', $productoId)
                ->take(6)
                ->get()
                ->map(function ($item) {
                    return [
                        'titulo' => $item->marca . ' ' . $item->modelo,
                        'precio' => $item->precio,
                        'img' => $item->img,
                        'url' => route('impresoras.show', $item->id),
                    ];
                });
        }

        if ($tipo === 'consumible') {
            return App\Models\Consumibles::where('id', '!=', $productoId)
                ->take(6)
                ->get()
                ->map(function ($item) {
                    return [
                        'titulo' => $item->marca . ' ' . $item->modelo,
                        'precio' => $item->precio,
                        'img' => $item->img,
                        'url' => route('consumibles.show', $item->id),
                    ];
                });
        }

        return App\Models\ProductosOficina::where('id', '!=', $productoId)
            ->take(6)
            ->get()
            ->map(function ($item) {
                return [
                    'titulo' => $item->marca . ' ' . $item->nombre,
                    'precio' => $item->precio,
                    'img' => $item->img,
                    'url' => route('oficina.show', $item->id),
                ];
            });
    }

    private function parseCaracteristicas($descripcion){
        if (empty($descripcion)) {
            return collect();
        }

        $texto = trim(strip_tags($descripcion));
        $texto = preg_replace('/\s+/', ' ', $texto);
        $partes = preg_split('/\s*(?:\||;|,|\r\n|\r|\n)\s*/', $texto);

        return collect($partes)
            ->map(function ($item) {
                return ucfirst(trim($item));
            })
            ->filter()
            ->values();
    }

    public function login(){
        return view('auth.login');
    }
    public function registro(){
        return view('auth.registro');
    }

    
}
