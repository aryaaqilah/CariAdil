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
        Schema::create('progress_kasus_hukum', function (Blueprint $table) {
            $table->id('id_progress');
            $table->bigInteger('id_kasus')->unsigned();
            $table->string('topik_progress');
            $table->date('date');
            $table->string('detail');
            $table->timestamps();

            $table->foreign('id_kasus')->references('id_kasus')->on('kasus_hukum')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress_kasus_hukum');
    }
};
