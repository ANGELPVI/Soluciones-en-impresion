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
                    'https://i.ebayimg.com/images/g/ODUAAOSw8Wtnfe-8/s-l1600.webp',
                    'https://i.ebayimg.com/images/g/nKoAAOSwBg5nfe-9/s-l1600.webp',
                    'https://i.ebayimg.com/images/g/CRwAAOSwqzJnfe--/s-l1600.webp',
                ],
            ],
            [
                'product_type' => 'impresora',
                'table' => 'impresoras',
                'where' => ['modelo', '=', 'LaserJet Pro M404dw'],
                'images' => [
                    'https://cdn.cs.1worldsync.com/ab/47/ab47aed4-4471-4134-8b69-c74cf83798c0.jpg',
                    'https://cdn.cs.1worldsync.com/16/2b/162baa2b-6302-4c9e-9315-18d6aeaaa2fc.jpg',
                    'https://cdn.cs.1worldsync.com/1f/3e/1f3eeb43-a916-4eec-b1c1-d2e4a6dfc33c.jpg',
                ],
            ],
            [
                'product_type' => 'oficina',
                'table' => 'productos_oficina',
                'where' => ['sku', '=', 'SSD-001'],
                'images' => [
                    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCMO8hZrUFVtsjtzCjRK_6luEmkXywEiF_8DM2W3vCrq8VXtmmkyqEsYK1&s=10',
                    'https://tuprecio-bucket-api.s3.us-east-2.amazonaws.com/product-photo-66bc9d55659d16a1821098b0-1723637404646-0',
                ],
            ],
            [
                'product_type' => 'oficina',
                'table' => 'productos_oficina',
                'where' => ['sku', '=', 'HDD-001'],
                'images' => [
                    'https://m.media-amazon.com/images/I/71I%2BBQbC%2BkL._AC_SL1500_.jpg',
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
