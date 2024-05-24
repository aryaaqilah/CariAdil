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
            $table->string('title');
            $table->string('nama_lbh');
            $table->text('description');
            $table->date('tanggal');
            $table->integer('target_donasi');
            $table->text('image_url');
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
