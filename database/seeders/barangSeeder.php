<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) { // Misalnya membuat 10 data random
            DB::table('barang')->insert([
                'nama_barang' => 'Barang ' . $i,
                'harga_barang' => rand(10000, 100000), // Harga random
                'deskripsi' => 'Deskripsi untuk barang ' . $i,
                'stok' => rand(1, 100), // Stok random
            ]);
        }
    }
}
