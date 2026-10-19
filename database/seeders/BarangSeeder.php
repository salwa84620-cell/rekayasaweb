<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Barang::create([
            'nama_barang' => 'Laptop',
            'stok' => 50,
            'harga' => 6000000,
        ]);
        Barang::create([
            'nama_barang' => 'Mouse',
            'stok' => 30,
            'harga' => 200000,
        ]);
        

        
    }
}
