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
        Schema::create('form_pengajuan', function (Blueprint $table) {
            $table->id('id_form');
            $table->string('jenis_perkara')->nullable();
            $table->string('nomor_pemohon');
            $table->string('nama');
            $table->string('nama_panggilan');
            $table->string('tempat_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('status_perkawinan');
            $table->string('jumlah_anak');
            $table->string('jumlah_anak_tanggungan');
            $table->string('alamat_lengkap');
            $table->string('rt_rw');
            $table->string('desa_kelurahan');
            $table->string('kabupaten_kota');
            $table->string('kode_pos');
            $table->string('kecamatan');
            $table->string('provinsi');
            $table->string('identitas_diri');
            $table->string('nomor_identitas');
            $table->string('keterangan_tidak_mampu');
            $table->string('nomor_keterangan_tidak_mampu');
            $table->string('pekerjaan');
            $table->integer('jumlah_tanggungan');
            $table->string('pendidikan_terakhir');
            $table->string('telepon');
            $table->string('hp');
            $table->text('uraian');
            $table->string('lokasi_pembuatan_form');
            $table->date('tanggal');
            $table->text('image_url');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_pengajuan');
    }
};
