<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();

        $products = [
            [
                'product_type' => 'consumible',
                'table' => 'consumibles',
                'where' => ['modelo', 'like', '%58A%'],
                'images' => [
                    'https://www.kabifperu.com/imagenes/toner-hp-58a-laserjet-pro-m428fdw-cf258a-deta-13092022125640.jpg',
                    'https://shop.dupapier.com.mx/cdn/shop/files/TONER-58A-CF258A-NEGRO-3000-PAGINAS_C067-517-_1.jpg?v=1761232770',
                    'https://shop.dupapier.com.mx/cdn/shop/files/TONER-58A-CF258A-NEGRO-3000-PAGINAS_C067-517-_1.jpg?v=1761232770',
                ],
            ],
            [
                'product_type' => 'impresora',
                'table' => 'impresoras',
                'where' => ['modelo', '=', 'LaserJet Pro M404dw'],
                'images' => [
                    'https://cdn.cs.1worldsync.com/ab/47/ab47aed4-4471-4134-8b69-c74cf83798c0.jpg',
                    'https://cdn.cs.1worldsync.com/16/2b/162baa2b-6302-4c9e-9315-18d6aeaaa2fc.jpg',
                    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgQItbOmEUxryM2etkkfd05J8ZnW0dlRZyZQ&s',
                ],
            ],
            [
                'product_type' => 'oficina',
                'table' => 'productos_oficina',
                'where' => ['sku', '=', 'SSD-001'],
                'images' => [
                    'https://www.serversupply.com/images/WebPImage/333454.webp?v=04-X-yePcLAJoRpoyc63sM1fgxZ6j5LOiDwnb99gCJo',
                    'https://www.serversupply.com/images/mproductimages/333454_0_100.jpg?v=638527295529935956%3Fv%3D639120491599480048',
                    'https://www.serversupply.com/images/mproductimages/333454_1_100.jpg?v=638527295530404789%3Fv%3D639120491599480164',
                ],
            ],
            [
                'product_type' => 'oficina',
                'table' => 'productos_oficina',
                'where' => ['sku', '=', 'HDD-001'],
                'images' => [
                    'https://m.media-amazon.com/images/I/51LaSbUPn0L.jpg',
                    'https://images-na.ssl-images-amazon.com/images/I/71I%2BBQbC%2BkL._AC_SL1500_.jpg',
                    'https://images-na.ssl-images-amazon.com/images/I/61uF7GopfcL._AC_SL1500_.jpg',
                ],
            ],
        ];

        foreach ($products as $productData) {
            $product = DB::table($productData['table'])
                ->where($productData['where'][0], $productData['where'][1], $productData['where'][2])
                ->first();

            if (! $product) {
                continue;
            }

            DB::table('product_images')
                ->where('product_type', $productData['product_type'])
                ->where('product_id', $product->id)
                ->delete();

            foreach ($productData['images'] as $position => $imageUrl) {
                DB::table('product_images')->insert([
                    'product_type' => $productData['product_type'],
                    'product_id' => $product->id,
                    'image_url' => $imageUrl,
                    'position' => $position + 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }
    }
}
