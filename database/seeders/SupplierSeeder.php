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
            ['supplier_id' => 1, 'supplier_kode' => 'SUP001', 'supplier_nama' => 'PT. Sumber Makmur', 'supplier_alamat' => 'Jl. Merdeka No. 123, Malang'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP002', 'supplier_nama' => 'CV. Sejahtera Abadi', 'supplier_alamat' => 'Jl. Sudirman No. 456, Malang'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP003', 'supplier_nama' => 'PT. Maju Jaya', 'supplier_alamat' => 'Jl. Gatot Subroto No. 789, Malang'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
