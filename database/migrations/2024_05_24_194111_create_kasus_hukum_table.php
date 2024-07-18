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
        Schema::create('kasus_hukum', function (Blueprint $table) {
            $table->id('id_kasus');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->date('tanggal');
            $table->integer('target_donasi');
            // $table->bigInteger('id_bank')->unsigned();
            $table->bigInteger('id_form')->unsigned();
            $table->bigInteger('id_lbh')->unsigned()->nullable();

            $table->string('status_pengajuan');

            $table->text('image_url')->nullable();

            $table->foreign('id_form')->references('id_form')->on('form_pengajuan')->onDelete('cascade');
            // $table->foreign('id_bank')->references('id_bank')->on('bank')->onDelete('cascade');
            $table->foreign('id_lbh')->references('id_LBH')->on('LBH')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasus_hukum');
    }
};
