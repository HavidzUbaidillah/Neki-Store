<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=6; $i++){
            DB::table('tag_produk')
                ->insert([
                    'tag_id' => $i,
                    'produk_id' => mt_rand(1,3),
                ]);
        }
    }
}
