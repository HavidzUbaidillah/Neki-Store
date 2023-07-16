<?php

namespace Database\Seeders;

use App\Models\TopProdukModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i =1; $i<=2; $i++){
            TopProdukModel::create([
               'produk_id' => $i,
            ]);
        }
    }
}
