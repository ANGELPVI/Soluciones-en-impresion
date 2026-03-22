<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        // 1. Datos de 10 Impresoras
        $datosImpresoras = [
            ['modelo' => 'LaserJet Pro M404dw', 'marca' => 'HP', 'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgQItbOmEUxryM2etkkfd05J8ZnW0dlRZyZQ&s', 'precio' => 4500.50, 'stock' => 12, 'desc' => 'Ideal para oficinas con alto volumen de impresión monocromática.'],
            ['modelo' => 'EcoTank L3210', 'marca' => 'Epson', 'img' => 'https://http2.mlstatic.com/D_Q_NP_697608-MLA99495432038_112025-O.webp', 'precio' => 3899.00, 'stock' => 20, 'desc' => 'Multifuncional 3 en 1 con sistema de tanque de tinta de bajo costo.'],
            ['modelo' => 'Pixma G3110', 'marca' => 'Canon', 'img' => 'https://http2.mlstatic.com/D_NQ_NP_833994-MLA99449825754_112025-O.webp', 'precio' => 3450.00, 'stock' => 8, 'desc' => 'Impresora inalámbrica con tanques de tinta integrados.'],
            ['modelo' => 'Brother HL-L2350DW', 'marca' => 'Brother', 'img' => 'https://manuals.plus/wp-content/uploads/2023/09/brother-HL-L2350DW-Monochrome-Compact-Laser-Printer-Featured-Image.jpg', 'precio' => 2900.00, 'stock' => 15, 'desc' => 'Láser monocromo compacta con impresión dúplex automática.'],
            ['modelo' => 'WorkForce WF-2830', 'marca' => 'Epson', 'img' => 'https://mediaserver.goepson.com/adaptivemedia/rendition?id=10e71473a39d98886bca61d487ed6d2cc9cab5a7&vid=10e71473a39d98886bca61d487ed6d2cc9cab5a7&prid=1200Wx1200H&clid=SAPDAM&prclid=banner&assetDescr=wf2830_left-paper-doc-feeder_690x460', 'precio' => 2100.00, 'stock' => 10, 'desc' => 'Ideal para el hogar, cuenta con alimentador automático de documentos.'],
            ['modelo' => 'Color LaserJet Pro M255dw', 'marca' => 'HP', 'img' => 'https://www.myoffice.qa/cdn/shop/files/1_ec684e21-fe3d-4efe-aac3-794ccc08798f_800x.jpg?v=1689151256', 'precio' => 7200.00, 'stock' => 5, 'desc' => 'Impresiones a color con calidad profesional y gran velocidad.'],
            ['modelo' => 'EcoTank L121', 'marca' => 'Epson', 'img' => 'https://mediaserver.goepson.com/adaptivemedia/rendition?id=04596ba661a6150934c0b71cebc2def3cc4c4a08&vid=04596ba661a6150934c0b71cebc2def3cc4c4a08&prid=1200Wx1200H&clid=SAPDAM&prclid=banner&assetDescr=EcoTank-L121-690x460-1', 'precio' => 2600.00, 'stock' => 25, 'desc' => 'La opción más económica en sistema de tanques de tinta.'],
            ['modelo' => 'Smart Tank 515', 'marca' => 'HP', 'img' => 'https://mx-media.hptiendaenlinea.com/catalog/product/a/z/azure_1tj09a_2imagenprincipalsintexto.jpg', 'precio' => 4100.00, 'stock' => 14, 'desc' => 'Conexiones más rápidas y fácil impresión móvil con HP Smart.'],
            ['modelo' => 'imageCLASS LBP6030w', 'marca' => 'Canon', 'img' => 'https://securitysolution.shop/cdn/shop/files/Lbp6030w-1_1080x.jpg?v=1694625343', 'precio' => 2300.00, 'stock' => 18, 'desc' => 'Diseño compacto que ahorra espacio, ideal para uso personal.'],
            ['modelo' => 'Phaser 3020', 'marca' => 'Xerox', 'img' => 'https://www.recis.com.mx/wp-content/uploads/2019/12/IMPRESORA-XEROX-PHASER-3020..jpg', 'precio' => 2750.00, 'stock' => 7, 'desc' => 'Fiabilidad y conectividad Wi-Fi para pequeñas empresas.'],
        ];

        $idsImpresoras = [];

        foreach ($datosImpresoras as $imp) {
            $idsImpresoras[] = DB::table('impresoras')->insertGetId([
                'modelo' => $imp['modelo'],
                'marca' => $imp['marca'],
                'img' => $imp['img'],
                'Descripcion' => $imp['desc'],
                'precio' => $imp['precio'],
                'stock' => $imp['stock'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 2. Datos de 10 Consumibles (Relacionados con las impresoras anteriores)
        $datosConsumibles = [
            ['modelo' => 'Tóner 58A Negro', 'marca' => 'HP', 'img' => 'toner_58a.jpg', 'precio' => 1150.00, 'stock' => 50, 'impIdx' => 0],
            ['modelo' => 'Botella Tinta 544 Negra', 'marca' => 'Epson', 'img' => 'tinta_544.jpg', 'precio' => 220.00, 'stock' => 100, 'impIdx' => 1],
            ['modelo' => 'Botella Tinta GI-190', 'marca' => 'Canon', 'img' => 'tinta_gi190.jpg', 'precio' => 240.00, 'stock' => 80, 'impIdx' => 2],
            ['modelo' => 'Tóner TN730', 'marca' => 'Brother', 'img' => 'toner_tn730.jpg', 'precio' => 980.00, 'stock' => 30, 'impIdx' => 3],
            ['modelo' => 'Cartucho 212 Negro', 'marca' => 'Epson', 'img' => 'cartucho_212.jpg', 'precio' => 450.00, 'stock' => 40, 'impIdx' => 4],
            ['modelo' => 'Tóner 206A Magenta', 'marca' => 'HP', 'img' => 'toner_206a.jpg', 'precio' => 1850.00, 'stock' => 15, 'impIdx' => 5],
            ['modelo' => 'Botella Tinta 664 Cian', 'marca' => 'Epson', 'img' => 'tinta_664.jpg', 'precio' => 210.00, 'stock' => 120, 'impIdx' => 6],
            ['modelo' => 'Botella Tinta GT53XL', 'marca' => 'HP', 'img' => 'tinta_gt53.jpg', 'precio' => 280.00, 'stock' => 90, 'impIdx' => 7],
            ['modelo' => 'Cartucho 125 Negro', 'marca' => 'Canon', 'img' => 'cartucho_125.jpg', 'precio' => 1100.00, 'stock' => 25, 'impIdx' => 8],
            ['modelo' => 'Tóner 106R02773', 'marca' => 'Xerox', 'img' => 'toner_xerox.jpg', 'precio' => 1350.00, 'stock' => 12, 'impIdx' => 9],
        ];

        foreach ($datosConsumibles as $con) {
            DB::table('consumibles')->insert([
                'modelo' => $con['modelo'],
                'marca' => $con['marca'],
                'img' => $con['img'],
                'descripcion' => 'Insumo original garantizado para alto rendimiento.',
                'precio' => $con['precio'], // He mantenido 'precio' por tu migración actual
                'stock' => $con['stock'],
                'impresoraId' => $idsImpresoras[$con['impIdx']], // Vincula con el ID real
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}