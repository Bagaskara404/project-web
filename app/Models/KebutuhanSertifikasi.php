<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KebutuhanSertifikasi extends Model
{
    use HasFactory;
    
    protected $table = 'kebutuhansertifkasi';
    protected $fillable = ['nama_sertifikasi', 'dokumen_lembaga'];
}
