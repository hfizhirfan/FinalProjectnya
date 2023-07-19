<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name_product' => 'Mie Aceh',
                'price' => 35000,
                'image'=> 'Mie Aceh D.jpg',
                'type_id'=> 1
            ],
            [
                'name_product' => 'Mie Ayam',
                'price' => 13000,
                'image'=> 'Mie Ayam D.jpg',
                'type_id'=> 1
            ],
            [
                'name_product' => 'Mie Bakso',
                'price' => 10000,
                'image'=> 'Mie Bakso D.jpg',
                'type_id'=> 3
            ],
            [
                'name_product' => 'Mie Goreng',
                'price' => 18000,
                'image'=> 'Mie Goreng D.jpg',
                'type_id'=> 1
            ],
            [
                'name_product' => 'Mie Jawa',
                'price' => 16000,
                'image'=> 'Mie Jawa D.jpg',
                'type_id'=> 1
            ],
            [
                'name_product' => 'Mie Kocok',
                'price' => 24000,
                'image'=> 'Mie Kocok D.jpg',
                'type_id'=> 1
            ],
            [
                'name_product' => 'Mie Kuah',
                'price' => 10000,
                'image'=> 'Mie Kuah D.jpg',
                'type_id'=> 1

            ],
            [
                'name_product' => 'Sayur Kangkung',
                'price' => 8000,
                'image'=> 'Sayur Kangkung D.jpg',
                'type_id'=> 2
            ],
            [
                'name_product' => 'Sayur Labu Siam',
                'price' => 12000,
                'image'=> 'Sayur Labu Siam D.jpg',
                'type_id'=> 2
            ],
            [
                'name_product' => 'Sayur Asem',
                'price' => 6000,
                'image'=> 'Sayur Asem D.jpg',
                'type_id'=> 2
            ],
            [
                'name_product' => 'Sayur Bayam',
                'price' => 8000,
                'image'=> 'Sayur Bayam D.jpg',
                'type_id'=> 2
            ],
            [
                'name_product' => 'Sayur Bening',
                'price' => 10000,
                'image'=> 'Sayur Bening D.jpg',
                'type_id'=> 2
            ],
            [
                'name_product' => 'Ayam Bakar',
                'price' => 18000,
                'image'=> 'Ayam Bakar D.jpg',
                'type_id'=> 3
            ],
            [
                'name_product' => 'Ayam Geprek',
                'price' => 20000,
                'image'=> 'Ayam Geprek D.jpg',
                'type_id'=> 3
            ],
            [
                'name_product' => 'Ayam Goreng',
                'price' => 16000,
                'image'=> 'Ayam Goreng D.jpg',
                'type_id'=> 3
            ],
            [
                'name_product' => 'Ikan Asam Manis',
                'price' => 24000,
                'image'=> 'Ikan Asam Manis D.jpg',
                'type_id'=> 4
            ],
            [
                'name_product' => 'Ikan Bakar',
                'price' => 25000,
                'image'=> 'Ikan Bakar D.jpg',
                'type_id'=> 4
            ],
            [
                'name_product' => 'Ikan Gurameh',
                'price' => 28000,
                'image'=> 'Ikan Gurameh D.jpg',
                'type_id'=> 4
            ],
            [
                'name_product' => 'Daging Balado',
                'price' => 20000,
                'image'=> 'Daging Balado D.jpg',
                'type_id'=> 5
            ],
            [
                'name_product' => 'Rendang Daging',
                'price' => 24000,
                'image'=> 'Rendang Daging D.jpg',
                'type_id'=> 5
            ],
            [
                'name_product' => 'Sop Buntut',
                'price' => 20000,
                'image'=> 'Sop Buntut D.jpg',
                'type_id'=> 5
            ],
            [
                'name_product' => 'Nasi Ayam Hainan',
                'price' => 27000,
                'image'=> 'Nasi Ayam Hainan D.jpg',
                'type_id'=> 6
            ],
            [
                'name_product' => 'Nasi Goreng',
                'price' => 15000,
                'image'=> 'Nasi Goreng D.jpg',
                'type_id'=> 6
            ],
            [
                'name_product' => 'Nasi Pecel',
                'price' => 15000,
                'image'=> 'Nasi Pecel D.jpg',
                'type_id'=> 6
            ],
            [
                'name_product' => 'Soto Betawi',
                'price' => 20000,
                'image'=> 'Soto Betawi D.jpg',
                'type_id'=> 7
            ],
            [
                'name_product' => 'Soto Ayam',
                'price' => 13000,
                'image'=> 'Soto Ayam D.jpg',
                'type_id'=> 7
            ],
            [
                'name_product' => 'Puding Coklat',
                'price' => 6000,
                'image'=> 'Puding Coklat D.jpg',
                'type_id'=> 8
            ]
        ]);
    }
}
