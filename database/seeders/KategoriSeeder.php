<?php

namespace Database\Seeders;

use App\Models\KategoriModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriModel::create([
            'nama_kategori' => 'Sepatu',
        ]);

        KategoriModel::create([
            'nama_kategori' => 'Kaos',
        ]);

        KategoriModel::create([
            'nama_kategori' => 'Bra',
        ]);

        KategoriModel::create([
            'nama_kategori' => 'Topi',
        ]);
    }
}
