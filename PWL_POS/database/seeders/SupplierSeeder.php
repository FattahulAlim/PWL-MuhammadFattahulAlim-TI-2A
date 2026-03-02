<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT Sumber Elektronik',
                'supplier_alamat' => 'Jl. Industri No. 15, Jakarta'
            ],
            [
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'CV Maju Jaya Abadi',
                'supplier_alamat' => 'Jl. Raya Bandung No. 88, Bandung'
            ],
            [
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'PT Berkah Sejahtera',
                'supplier_alamat' => 'Jl. Diponegoro No. 21, Surabaya'
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
