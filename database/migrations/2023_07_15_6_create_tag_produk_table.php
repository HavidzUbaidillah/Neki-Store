<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tag_produk', function (Blueprint $table) {
            $table->id('id_tag_produk');
            $table->foreignId('tag_id')->constrained('tag','id_tag');
            $table->foreignId('produk_id')->constrained('produk','id_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_produk');
    }
};
