<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('keranjangbelanja', function (Blueprint $table) {
        // The prompt asked for ID, auto-increment, primary key, integer
        $table->integer('ID')->autoIncrement();
        $table->integer('KodeBarang');
        $table->integer('Jumlah');
        $table->integer('Harga');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang_belanjas');
    }
};
