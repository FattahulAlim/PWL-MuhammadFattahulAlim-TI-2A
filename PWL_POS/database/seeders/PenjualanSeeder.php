<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'pembeli' => 'Budi Santoso',
                'penjualan_kode' => 'TRX001',
                'penjualan_tanggal' => '2026-03-06 08:15:00',
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Siti Rahma',
                'penjualan_kode' => 'TRX002',
                'penjualan_tanggal' => '2026-03-06 09:20:00',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Andi Wijaya',
                'penjualan_kode' => 'TRX003',
                'penjualan_tanggal' => '2026-03-06 10:05:00',
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Dewi Lestari',
                'penjualan_kode' => 'TRX004',
                'penjualan_tanggal' => '2026-03-07 08:45:00',
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Rizky Pratama',
                'penjualan_kode' => 'TRX005',
                'penjualan_tanggal' => '2026-03-07 09:30:00',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Maya Putri',
                'penjualan_kode' => 'TRX006',
                'penjualan_tanggal' => '2026-03-07 11:10:00',
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Fajar Nugroho',
                'penjualan_kode' => 'TRX007',
                'penjualan_tanggal' => '2026-03-08 08:25:00',
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Lina Marlina',
                'penjualan_kode' => 'TRX008',
                'penjualan_tanggal' => '2026-03-08 09:50:00',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Hendra Saputra',
                'penjualan_kode' => 'TRX009',
                'penjualan_tanggal' => '2026-03-08 10:40:00',
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Nur Aisyah',
                'penjualan_kode' => 'TRX010',
                'penjualan_tanggal' => '2026-03-09 08:55:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
