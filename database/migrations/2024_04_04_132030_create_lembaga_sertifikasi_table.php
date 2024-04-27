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
        Schema::create('lembaga_sertifikasi', function (Blueprint $table) {
            $table->id('id_lembaga_sertifikasi');
            $table->string('username_lembaga');
            $table->string('pass_lembaga');
            $table->string('nama_lembaga');
            $table->date('tahun_berdiri');
            $table->string('jenis_sertifkasi_tersedia');
            $table->string('bukti_akreditasi');
            $table->string('alamat_lembaga');
            $table->string('no_hp');
            $table->string('foto_lembaga');
            $table->string('deskripsi_lembaga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lembaga_sertifikasi');
    }
};
