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
        ['kategori_id' => 1, 'kategori_kode' => 'FOOD', 'kategori_nama' => 'Makanan'],
        ['kategori_id' => 2, 'kategori_kode' => 'DRNK', 'kategori_nama' => 'Minuman'],
        ['kategori_id' => 3, 'kategori_kode' => 'SNCK', 'kategori_nama' => 'Snack'],
        ['kategori_id' => 4, 'kategori_kode' => 'ELEC', 'kategori_nama' => 'Elektronik'],
        ['kategori_id' => 5, 'kategori_kode' => 'CLOT', 'kategori_nama' => 'Pakaian']
        ];
        DB::table('m_kategori')->insert($data);
    }
}
