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
        Schema::create('petani', function (Blueprint $table) {
            $table->id('id_petani');
            $table->string('username_petani');
            $table->string('pass_petani');
            $table->string('nama_petani');
            $table->string('tipe_petani');
            $table->string('alamat_tani');
            $table->string('no_hp');
            $table->string('sertifikasi_tani');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petani');
    }
};
