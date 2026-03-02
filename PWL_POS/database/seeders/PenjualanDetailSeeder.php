<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Penjualan 1
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 6200000, 'jumlah' => 1],
            ['penjualan_id' => 1, 'barang_id' => 2, 'harga' => 175000, 'jumlah' => 2],
            ['penjualan_id' => 1, 'barang_id' => 4, 'harga' => 4000, 'jumlah' => 5],

            // Penjualan 2
            ['penjualan_id' => 2, 'barang_id' => 3, 'harga' => 425000, 'jumlah' => 1],
            ['penjualan_id' => 2, 'barang_id' => 5, 'harga' => 3500, 'jumlah' => 4],
            ['penjualan_id' => 2, 'barang_id' => 7, 'harga' => 5000, 'jumlah' => 3],

            // Penjualan 3
            ['penjualan_id' => 3, 'barang_id' => 6, 'harga' => 2500, 'jumlah' => 6],
            ['penjualan_id' => 3, 'barang_id' => 8, 'harga' => 2500, 'jumlah' => 5],
            ['penjualan_id' => 3, 'barang_id' => 10, 'harga' => 75000, 'jumlah' => 1],

            // Penjualan 4
            ['penjualan_id' => 4, 'barang_id' => 9, 'harga' => 12000, 'jumlah' => 2],
            ['penjualan_id' => 4, 'barang_id' => 11, 'harga' => 185000, 'jumlah' => 1],
            ['penjualan_id' => 4, 'barang_id' => 13, 'harga' => 30000, 'jumlah' => 2],

            // Penjualan 5
            ['penjualan_id' => 5, 'barang_id' => 12, 'harga' => 150000, 'jumlah' => 1],
            ['penjualan_id' => 5, 'barang_id' => 14, 'harga' => 40000, 'jumlah' => 2],
            ['penjualan_id' => 5, 'barang_id' => 15, 'harga' => 100000, 'jumlah' => 1],


            // Penjualan 6
            ['penjualan_id' => 6, 'barang_id' => 1, 'harga' => 6200000, 'jumlah' => 1],
            ['penjualan_id' => 6, 'barang_id' => 5, 'harga' => 3500, 'jumlah' => 3],
            ['penjualan_id' => 6, 'barang_id' => 8, 'harga' => 2500, 'jumlah' => 4],

            // Penjualan 7
            ['penjualan_id' => 7, 'barang_id' => 2, 'harga' => 175000, 'jumlah' => 1],
            ['penjualan_id' => 7, 'barang_id' => 10, 'harga' => 75000, 'jumlah' => 2],
            ['penjualan_id' => 7, 'barang_id' => 13, 'harga' => 30000, 'jumlah' => 1],

            // Penjualan 8
            ['penjualan_id' => 8, 'barang_id' => 3, 'harga' => 425000, 'jumlah' => 1],
            ['penjualan_id' => 8, 'barang_id' => 6, 'harga' => 2500, 'jumlah' => 5],
            ['penjualan_id' => 8, 'barang_id' => 14, 'harga' => 40000, 'jumlah' => 1],

            // Penjualan 9
            ['penjualan_id' => 9, 'barang_id' => 4, 'harga' => 4000, 'jumlah' => 10],
            ['penjualan_id' => 9, 'barang_id' => 11, 'harga' => 185000, 'jumlah' => 1],
            ['penjualan_id' => 9, 'barang_id' => 15, 'harga' => 100000, 'jumlah' => 1],

            // Penjualan 10
            ['penjualan_id' => 10, 'barang_id' => 7, 'harga' => 5000, 'jumlah' => 4],
            ['penjualan_id' => 10, 'barang_id' => 9, 'harga' => 12000, 'jumlah' => 2],
            ['penjualan_id' => 10, 'barang_id' => 12, 'harga' => 150000, 'jumlah' => 1],

        ];
        DB::table('t_penjualan_detail')->insert($data);
        }
    }
