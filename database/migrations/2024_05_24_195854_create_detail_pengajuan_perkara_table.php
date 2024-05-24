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
        Schema::create('detail_pengajuan_perkara', function (Blueprint $table) {
            $table->id('id_pengajuan');
            $table->string('nama_pemohon');
            $table->string('jenis_perkara');
            $table->date('tanggal_pengajuan');
            $table->text('image_url');
            $table->string('status_pengajuan');
            $table->bigInteger('id_form')->unsigned();
            $table->timestamps();

            $table->foreign('id_form')->references('id_form')->on('form_pengajuan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pengajuan_perkara');
    }
};
