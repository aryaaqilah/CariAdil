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
        Schema::create('transaksi_donasi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->bigInteger('id_kasus_hukum')->unsigned();
            
            $table->integer('nominal');
            $table->timestamps();

            
            $table->foreign('id_kasus_hukum')->references('id_kasus')->on('kasus_hukum')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_donasi');
    }
};
