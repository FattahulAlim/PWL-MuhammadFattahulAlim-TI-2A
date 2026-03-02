<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_kode' => 'ELK',
                'kategori_nama' => 'Elektronik'
            ],
            [
                'kategori_kode' => 'MKN',
                'kategori_nama' => 'Makanan & Minuman'
            ],
            [
                'kategori_kode' => 'ATK',
                'kategori_nama' => 'Alat Tulis Kantor'
            ],
            [
                'kategori_kode' => 'FAS',
                'kategori_nama' => 'Fashion'
            ],
            [
                'kategori_kode' => 'PRB',
                'kategori_nama' => 'Perabot Rumah Tangga'
            ],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
