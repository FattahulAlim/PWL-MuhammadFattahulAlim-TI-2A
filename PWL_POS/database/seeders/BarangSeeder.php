<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Laptop Asus VivoBook',
                'harga_beli' => 5500000,
                'harga_jual' => 6200000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Mouse Wireless Logitech',
                'harga_beli' => 120000,
                'harga_jual' => 175000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Keyboard Mechanical',
                'harga_beli' => 300000,
                'harga_jual' => 425000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Air Mineral 600ml',
                'harga_beli' => 2500,
                'harga_jual' => 4000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Mie Instan Goreng',
                'harga_beli' => 2200,
                'harga_jual' => 3500,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Kopi Sachet',
                'harga_beli' => 1500,
                'harga_jual' => 2500,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Buku Tulis 58 Lembar',
                'harga_beli' => 3500,
                'harga_jual' => 5000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Pulpen Standard AE7',
                'harga_beli' => 1500,
                'harga_jual' => 2500,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Stapler Kecil',
                'harga_beli' => 8000,
                'harga_jual' => 12000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Kaos Polos Cotton',
                'harga_beli' => 45000,
                'harga_jual' => 75000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Celana Jeans Pria',
                'harga_beli' => 120000,
                'harga_jual' => 185000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Jaket Hoodie',
                'harga_beli' => 95000,
                'harga_jual' => 150000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Sapu Lantai',
                'harga_beli' => 18000,
                'harga_jual' => 30000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Ember Plastik 20L',
                'harga_beli' => 25000,
                'harga_jual' => 40000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Rak Sepatu Plastik',
                'harga_beli' => 65000,
                'harga_jual' => 100000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
