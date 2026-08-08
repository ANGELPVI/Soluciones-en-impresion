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
            'idealPara' => $this->getIdealPara($tipo, $titulo),
            'beneficiosCompra' => $this->getBeneficiosCompra(),
            'productosRelacionados' => $this->getRelatedProducts($tipo, $producto->id),
        ];
    }

    private function getIdealPara($tipo, $titulo){
        $titulo = strtolower($titulo);

        if ($tipo === 'impresora') {
            return collect([
                'Oficinas que imprimen documentos todos los dias',
                'Negocios que necesitan equipos confiables',
                'Usuarios que buscan buena velocidad de impresion',
                'Areas administrativas, recepcion o ventas',
            ]);
        }

        if ($tipo === 'consumible') {
            return collect([
                'Reponer tinta o toner antes de detener el trabajo',
                'Mantener impresoras listas para uso diario',
                'Negocios con volumen constante de impresion',
                'Usuarios que buscan compatibilidad y rendimiento',
            ]);
        }

        if (strpos($titulo, 'ssd') !== false) {
            return collect([
                'Mejorar la velocidad de una laptop o PC',
                'Instalar Windows y programas con arranque rapido',
                'Reemplazar discos duros lentos',
                'Trabajo de oficina, escuela y uso diario',
            ]);
        }

        if (strpos($titulo, 'silla') !== false || strpos($titulo, 'escritorio') !== false) {
            return collect([
                'Crear un espacio de trabajo mas comodo',
                'Oficinas, recepciones y areas administrativas',
                'Jornadas largas frente al escritorio',
                'Equipar estaciones de trabajo profesionales',
            ]);
        }

        return collect([
            'Complementar tu espacio de trabajo',
            'Oficinas, negocios y uso personal',
            'Mejorar productividad y organizacion',
            'Usuarios que buscan soluciones practicas',
        ]);
    }

    private function getBeneficiosCompra(){
        return collect([
            [
                'icono' => 'fas fa-comments',
                'titulo' => 'Asesoria antes de comprar',
                'texto' => 'Te ayudamos a confirmar si el producto se adapta a tu equipo o necesidad.',
            ],
            [
                'icono' => 'fas fa-truck',
                'titulo' => 'Entrega local disponible',
                'texto' => 'Coordinamos entrega o recoleccion segun disponibilidad y ubicacion.',
            ],
            [
                'icono' => 'fas fa-tools',
                'titulo' => 'Soporte tecnico especializado',
                'texto' => 'Contamos con experiencia en impresoras, consumibles y equipo de oficina.',
            ],
        ]);
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
