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
    Schema::create('topi', function (Blueprint $table) {
        $table->increments('kodetopi'); // Handles the INT AutoNumber PK
        $table->string('merktopi', 30); // Handles VARCHAR(30)
        $table->integer('stocktopi');   // Handles INT
        $table->char('tersedia', 1);    // Handles CHAR(1)
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topis');
    }
};
