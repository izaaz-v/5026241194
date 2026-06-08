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
    Schema::create('nilaikuliah', function (Blueprint $table) {
        $table->integer('ID')->autoIncrement();
        $table->char('NRP', 6);
        $table->integer('NilaiAngka');
        $table->integer('SKS');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_kuliahs');
    }
};
