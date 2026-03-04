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
            ['barang_id' => 1,  'barang_kode' => 'BRG001', 'kategori_id' => 1, 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['barang_id' => 2,  'barang_kode' => 'BRG002', 'kategori_id' => 2, 'barang_nama' => 'Es Teh', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['barang_id' => 3,  'barang_kode' => 'BRG003', 'kategori_id' => 3, 'barang_nama' => 'Keripik Singkong', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 4,  'barang_kode' => 'BRG004', 'kategori_id' => 4, 'barang_nama' => 'Headphone', 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['barang_id' => 5,  'barang_kode' => 'BRG005', 'kategori_id' => 5, 'barang_nama' => 'Kaos Polos', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['barang_id' => 6,  'barang_kode' => 'BRG006', 'kategori_id' => 1, 'barang_nama' => 'Mie Goreng', 'harga_beli' => 8000, 'harga_jual' => 12000],
            ['barang_id' => 7,  'barang_kode' => 'BRG007', 'kategori_id' => 2, 'barang_nama' => 'Jus Jeruk', 'harga_beli' => 7000, 'harga_jual' => 10000],
            ['barang_id' => 8,  'barang_kode' => 'BRG008', 'kategori_id' => 3, 'barang_nama' => 'Cokelat Batangan', 'harga_beli' => 4000, 'harga_jual' => 6000],
            ['barang_id' => 9,  'barang_kode' => 'BRG009', 'kategori_id' => 4, 'barang_nama' => 'Smartphone', 'harga_beli' => 1500000, 'harga_jual' => 2000000],
            ['barang_id' => 10, 'barang_kode' => 'BRG010', 'kategori_id' => 5, 'barang_nama' => 'Jeans', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 11, 'barang_kode' => 'BRG011', 'kategori_id' => 1, 'barang_nama' => 'Mie Ayam', 'harga_beli' => 9000, 'harga_jual' => 13000],   
            ['barang_id' => 12, 'barang_kode' => 'BRG012', 'kategori_id' => 2, 'barang_nama' => 'Air Mineral', 'harga_beli' => 2000, 'harga_jual' => 5000],
            ['barang_id' => 13, 'barang_kode' => 'BRG013', 'kategori_id' => 3, 'barang_nama' => 'Kacang Goreng', 'harga_beli' => 3500, 'harga_jual' => 5500],
            ['barang_id' => 14, 'barang_kode' => 'BRG014', 'kategori_id' => 4, 'barang_nama' => 'Laptop', 'harga_beli' => 5000000, 'harga_jual' => 6000000],
            ['barang_id' => 15, 'barang_kode' => 'BRG015', 'kategori_id' => 5, 'barang_nama' => 'Jaket', 'harga_beli' => 150000, 'harga_jual' => 200000],
           

            ];
        DB::table('m_barang')->insert($data);
    }
}
