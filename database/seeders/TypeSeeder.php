<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            [
                'kode_tipe' => 'MI',
                'nama_tipe' => 'Mie'
            ],
            [
                'kode_tipe' => 'SY',
                'nama_tipe' => 'Sayur'
            ],
            [
                'kode_tipe' => 'AY',
                'nama_tipe' => 'Ayam'
            ],
            [
                'kode_tipe' => 'IK',
                'nama_tipe' => 'Ikan'
            ],
            [
                'kode_tipe' => 'DG',
                'nama_tipe' => 'Daging'
            ],
            [
                'kode_tipe' => 'NS',
                'nama_tipe' => 'Nasi'
            ],
            [
                'kode_tipe' => 'ST',
                'nama_tipe' => 'Soto'
            ],
            [
                'kode_tipe' => 'PD',
                'nama_tipe' => 'Puding'
            ]
        ]);
    }
}
