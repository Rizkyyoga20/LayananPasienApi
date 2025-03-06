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
        Schema::create('reseps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('obat_id')->unsigned();
            $table->integer('konsul_id')->unsigned();
            $table->string('keterangan_resep');
            $table->timestamps();

            /*
            $table->foreign('obat_id')->references('id')->on('obats')->onDelete('cascade');  
            $table->foreign('konsul_id')->references('id')->on('konsuls')->onDelete('cascade');  
            */

            $table->foreign('obat_id')->references('id')->on('obats');  
            $table->foreign('konsul_id')->references('id')->on('konsuls');  



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
