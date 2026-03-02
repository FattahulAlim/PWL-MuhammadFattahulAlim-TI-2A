<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'barang_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => '2026-03-01 08:00:00',
                'stok_jumlah' => 10,
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 2,
                'user_id' => 2,
                'stok_tanggal' => '2026-03-01 09:00:00',
                'stok_jumlah' => 25,
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 3,
                'user_id' => 3,
                'stok_tanggal' => '2026-03-01 10:00:00',
                'stok_jumlah' => 15,
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 4,
                'user_id' => 1,
                'stok_tanggal' => '2026-03-02 08:30:00',
                'stok_jumlah' => 100,
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 5,
                'user_id' => 2,
                'stok_tanggal' => '2026-03-02 09:15:00',
                'stok_jumlah' => 120,
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 6,
                'user_id' => 3,
                'stok_tanggal' => '2026-03-02 10:45:00',
                'stok_jumlah' => 80,
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 7,
                'user_id' => 1,
                'stok_tanggal' => '2026-03-03 08:20:00',
                'stok_jumlah' => 60,
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 8,
                'user_id' => 2,
                'stok_tanggal' => '2026-03-03 09:40:00',
                'stok_jumlah' => 75,
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 9,
                'user_id' => 3,
                'stok_tanggal' => '2026-03-03 11:00:00',
                'stok_jumlah' => 40,
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 10,
                'user_id' => 1,
                'stok_tanggal' => '2026-03-04 08:10:00',
                'stok_jumlah' => 30,
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 11,
                'user_id' => 2,
                'stok_tanggal' => '2026-03-04 09:25:00',
                'stok_jumlah' => 20,
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 12,
                'user_id' => 3,
                'stok_tanggal' => '2026-03-04 10:50:00',
                'stok_jumlah' => 35,
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 13,
                'user_id' => 1,
                'stok_tanggal' => '2026-03-05 08:35:00',
                'stok_jumlah' => 50,
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 14,
                'user_id' => 2,
                'stok_tanggal' => '2026-03-05 09:55:00',
                'stok_jumlah' => 45,
            ],
            [
                'supplier_id' => 3,
                'barang_id' => 15,
                'user_id' => 3,
                'stok_tanggal' => '2026-03-05 11:15:00',
                'stok_jumlah' => 25,
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
