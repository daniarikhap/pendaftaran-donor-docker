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
    Schema::create('kecamatan_m', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('kabupaten_id');
        $table->string('nama');
        $table->timestamps();

        $table->foreign('kabupaten_id')
              ->references('id')
              ->on('kabupaten_m')
              ->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kecamatan_m');
    }
};
