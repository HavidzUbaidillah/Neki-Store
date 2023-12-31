<?php

namespace Database\Seeders;

use App\Models\NewProdukModel;
use App\Models\ProdukModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=3; $i++){
            NewProdukModel::create([
               'produk_id' => $i,
            ]);
        }
    }
}
