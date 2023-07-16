<?php

namespace Database\Seeders;
use App\Models\ProdukModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProdukModel::create([
            'nama_produk' => 'Neki Airmax 97',
            'deskripsi_produk' => 'Nike Airmax adalah sebuah sepatu',
            'harga_produk' => '2500000',
            'kategori_id' => '1',
        ]);

        ProdukModel::create([
            'nama_produk' => 'Bra Sport',
            'deskripsi_produk' => 'Bra sport digunakan untuk olahraga',
            'harga_produk' => '350000.00',
            'kategori_id' => '3',
        ]);

        ProdukModel::create([
            'nama_produk' => 'Neki Vintage 70s',
            'deskripsi_produk' => 'Topi vintage',
            'harga_produk' => '300000',
            'kategori_id' => '4',
        ]);

        ProdukModel::create([
            'nama_produk' => 'Neki T-shirt',
            'deskripsi_produk' => 'Kaos olahraga',
            'harga_produk' => '2500000',
            'kategori_id' => '2',
        ]);
    }
}
