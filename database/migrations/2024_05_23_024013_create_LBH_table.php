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
        Schema::create('LBH', function (Blueprint $table) {
            $table->id('id_LBH');
            $table->string('nama_lbh');
            $table->string('password');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->string('alamat');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LBH');
    }
};
