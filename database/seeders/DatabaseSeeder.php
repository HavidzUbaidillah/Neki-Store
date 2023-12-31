<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\NewProdukModel;
use App\Models\ProdukModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AdminSeeder::class,
            KategoriSeeder::class,
            ProdukSeeder::class,
            TagSeeder::class,
            TopProdukSeeder::class,
            TagProdukSeeder::class,
            NewProdukSeeder::class,
        ]);
    }
}
