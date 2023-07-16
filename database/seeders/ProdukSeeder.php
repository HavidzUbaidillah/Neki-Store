<?php

namespace Database\Seeders;
use App\Models\BarangModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BarangModel::create([
            'nama_barang' => 'Nike Airmax 97',
            'deskripsi_barang' => 'Nike Airmax adalah sebuah sepatu',
            'harga_barang' => '2500000.00',
            'kategori_id' => '1',
        ]);
    }
}
