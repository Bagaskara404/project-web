<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    protected $table = 'akun';
    protected $fillable = [ 'name','email', 'password', 'tahun_berdiri', 'sertifikasi', 'alamat', 'no_hp', 'jenis_petani', 'role'];
}
