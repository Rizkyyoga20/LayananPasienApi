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
        Schema::create('konsuls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pasien_id')->unsigned();
            $table->string('nomor_antrian');
            $table->string('keterangan_konsul');
            $table->string('saran');
            $table->string('informasi');
            $table->timestamps();

            //$table->foreign('pasien_id')->references('id')->on('users')->onDelete('cascade');     
            $table->foreign('pasien_id')->references('id')->on('users');     
       
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsuls');
    }
};
