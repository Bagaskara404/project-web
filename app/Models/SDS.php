<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SDS extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = "id_permintaan_sertifikasi";
    protected $table = 'permintaan_sertifikasi';
    protected $fillable = ['id_permintaan_sertifikasi','nama_petani','nama_sertifikasi', 'dokumen_petani'];
}
