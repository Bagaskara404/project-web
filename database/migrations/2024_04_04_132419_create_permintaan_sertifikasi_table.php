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
        Schema::create('permintaan_sertifikasi', function (Blueprint $table) {
            $table->id('id_permintaan_sertifikasi');
            $table->string('nama_petani');
            $table->string('nama_sertifikasi');
            $table->string('dokumen_petani');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan_sertifikasi');
    }
};
