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
                'img' => 'https://m.media-amazon.com/images/I/71Mw8QtVKhL._AC_UF894,1000_QL80_.jpg',
                'descripcion' => 'Silla ergonómica con soporte lumbar ajustable, reposabrazos y asiento acolchado para máxima comodidad durante largas horas de trabajo.',
                'precio' => 3500.00,
                'stock' => 20,
                'sku' => 'SILLA-001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Escritorio Ejecutivo de Madera',
                'marca' => 'OfficeLux',
                'categoria' => 'oficina',
                'img' => 'https://www.bering.mx/img/muebles-para-oficina/escritorios/ejecutivo-stila.jpg',
                'descripcion' => 'Escritorio ejecutivo de madera maciza con amplio espacio de trabajo, cajones laterales y acabado elegante para oficinas profesionales.',
                'precio' => 7500.00,
                'stock' => 10,
                'sku' => 'ESCRITORIO-001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Lámpara de Escritorio LED',
                'marca' => 'BrightLight',
                'categoria' => 'oficina',
                'img' => 'https://m.media-amazon.com/images/I/61zAJQHLw+L.jpg',
                'descripcion' => 'Lámpara de escritorio LED con brillo ajustable, diseño moderno y base antideslizante para iluminar tu espacio de trabajo de manera eficiente.',
                'precio' => 1200.00,
                'stock' => 30,
                'sku' => 'LAMPARA-001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Archivador Metálico de 4 Cajones',
                'marca' => 'FileMaster',
                'categoria' => 'oficina',
                'img' => 'https://m.media-amazon.com/images/I/51uuZFDYV6L.jpg',
                'descripcion' => 'Archivador metálico con cuatro cajones espaciosos, cerradura de seguridad y ruedas para facilitar su movilidad en la oficina.',
                'precio' => 4500.00,
                'stock' => 15,
                'sku' => 'ARCHIVADOR-001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Organizador de Escritorio Multifuncional',
                'marca' => 'DeskOrganizer',
                'categoria' => 'oficina',
                'img' => 'https://m.media-amazon.com/images/I/61N9NrW85FL._AC_UF894,1000_QL80_.jpg',
                'descripcion' => 'Organizador de escritorio con compartimentos para bolígrafos, papeles, tarjetas y otros accesorios, manteniendo tu espacio ordenado y funcional.',
                'precio' => 800.00,
                'stock' => 25,
                'sku' => 'ORGANIZADOR-001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Memoria USB 3.0 64GB',
                'marca' => 'Kingston',
                'categoria' => 'tecnologia',
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcoUKSQct9RFRtfPvxFHfgIzFrM9TrL2jVJQ&s',
                'descripcion' => 'Unidad USB 3.0 de alta velocidad, ideal para transferencias rápidas de datos. Capacidad de 64GB, compatible con Windows, Mac y Linux.',
                'precio' => 450.00,
                'stock' => 40,
                'sku' => 'USB-001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'SSD 480GB 2.5" TLC',
                'marca' => 'Samsung',
                'categoria' => 'tecnologia',
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOpZcbdzPNQzSV7pGNDcU5M0oGUY8GfQRr0w&s',
                'descripcion' => 'Unidad SSD de estado sólido con interfaz SATA 2.5", velocidad de lectura 550 MB/s, ideal para mejorar el rendimiento de tu computadora.',
                'precio' => 2300.00,
                'stock' => 12,
                'sku' => 'SSD-001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Disco Duro Externo 1TB',
                'marca' => 'Western Digital',
                'categoria' => 'tecnologia',
                'img' => 'https://m.media-amazon.com/images/I/51LaSbUPn0L.jpg',
                'descripcion' => 'Disco duro externo portátil de 1TB con conexión USB 3.0, perfecto para respaldar tus archivos, fotos y documentos importantes.',
                'precio' => 1850.00,
                'stock' => 18,
                'sku' => 'HDD-001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Memoria RAM DDR4 8GB',
                'marca' => 'Corsair',
                'categoria' => 'tecnologia',
                'img' => 'https://http2.mlstatic.com/D_NQ_NP_754520-MLA99984787943_112025-O.webp',
                'descripcion' => 'Módulo de memoria RAM DDR4 de 8GB, velocidad 3200MHz, baja latencia, compatible con procesadores Intel y AMD modernos.',
                'precio' => 950.00,
                'stock' => 35,
                'sku' => 'RAM-001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cable HDMI 2.1 4K',
                'marca' => 'Belkin',
                'categoria' => 'tecnologia',
                'img' => 'https://resources.sears.com.mx/medios-plazavip/mkt/65cbce3812581_whatsapp-image-2024-02-13-at-11445-pmjpeg.jpg?scale=500&qlty=75',
                'descripcion' => 'Cable HDMI 2.1 de alta velocidad, soporta resolución 4K a 60Hz, longitud de 2 metros, ideal para TV, monitores y proyectores.',
                'precio' => 650.00,
                'stock' => 28,
                'sku' => 'HDMI-001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('productos_oficina')->insert($datosProductosOficina);
    }
}
