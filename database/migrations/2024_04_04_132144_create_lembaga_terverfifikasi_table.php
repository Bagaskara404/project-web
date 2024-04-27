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
        Schema::create('lembaga_terverfifikasi', function (Blueprint $table) {
            $table->id('id_lembaga_terverifikasi');
            $table->string('id_lembaga')->unique();
            $table->string('id_terverifikai')->unique();
            $table->string('id_tidak_terverifikasi')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lembaga_terverfifikasi');
    }
};
