<?php

namespace Database\Seeders;

use App\Models\TagModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TagModel::create(['nama_tag' => 'Men',]);
        TagModel::create(['nama_tag' => 'Women',]);
        TagModel::create(['nama_tag' => 'Kidz',]);
        TagModel::create(['nama_tag' => 'Sport',]);
        TagModel::create(['nama_tag' => 'Lifestyle',]);
        TagModel::create(['nama_tag' => 'Football',]);
    }
}
