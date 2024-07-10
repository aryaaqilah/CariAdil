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

            $table->integer('nominal');
            $table->string('nama');
            $table->string('email');
            $table->string('nomor_telepon');
            $table->text('dukungan')->nullable();
            $table->timestamps();
            $table->bigInteger('id_kasus_hukum')->unsigned();
            $table->bigInteger('id_bank')->unsigned();
            $table->foreign('id_kasus_hukum')->references('id_kasus')->on('kasus_hukum')->onDelete('cascade');
            $table->foreign('id_bank')->references('id_bank')->on('bank')->onDelete('cascade');

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
