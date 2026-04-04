<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosOficinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1- datos de 10 productos de oficina
        $datosProductosOficina = [
            [
                'nombre' => 'Silla Ergonómica Pro',
                'marca' => 'ErgoComfort',
                'categoria' => 'oficina',
                'img' => 'https://www.ergocomfort.com/images/silla-ergonomica-pro.jpg',
                'descripcion' => 'Silla ergonómica con soporte lumbar ajustable, reposabrazos y asiento acolchado para máxima comodidad durante largas horas de trabajo.',
                'precio' => 3500.00,
                'stock' => 20,
                'sku' => 'SILLA-001',
            ],
            [
                'nombre' => 'Escritorio Ejecutivo de Madera',
                'marca' => 'OfficeLux',
                'categoria' => 'oficina',
                'img' => 'https://www.officelux.com/images/escritorio-ejecutivo-madera.jpg',
                'descripcion' => 'Escritorio ejecutivo de madera maciza con amplio espacio de trabajo, cajones laterales y acabado elegante para oficinas profesionales.',
                'precio' => 7500.00,
                'stock' => 10,
                'sku' => 'ESCRITORIO-001',
            ],
            [
                'nombre' => 'Lámpara de Escritorio LED',
                'marca' => 'BrightLight',
                'categoria' => 'oficina',
                'img' => 'https://www.brightlight.com/images/lampara-escritorio-led.jpg',
                'descripcion' => 'Lámpara de escritorio LED con brillo ajustable, diseño moderno y base antideslizante para iluminar tu espacio de trabajo de manera eficiente.',
                'precio' => 1200.00,
                'stock' => 30,
                'sku' => 'LAMPARA-001',
            ],
            [
                'nombre' => 'Archivador Metálico de 4 Cajones',
                'marca' => 'FileMaster',
                'categoria' => 'oficina',
                'img' => 'https://www.filemaster.com/images/archivador-metalico-4-cajones.jpg',
                'descripcion' => 'Archivador metálico con cuatro cajones espaciosos, cerradura de seguridad y ruedas para facilitar su movilidad en la oficina.',
                'precio' => 4500.00,
                'stock' => 15,
                'sku' => 'ARCHIVADOR-001',
            ],
            [
                'nombre' => 'Organizador de Escritorio Multifuncional',
                'marca' => 'DeskOrganizer',
                'categoria' => 'oficina',
                'img' => 'https://www.deskorganizer.com/images/organizador-escritorio-multifuncional.jpg',
                'descripcion' => 'Organizador de escritorio con compartimentos para bolígrafos, papeles, tarjetas y otros accesorios, manteniendo tu espacio ordenado y funcional.',
                'precio' => 800.00,
                'stock' => 25,
                'sku' => 'ORGANIZADOR-001',
            ],
        ];

        DB::table('productos_oficina')->insert($datosProductosOficina);
    }
}
