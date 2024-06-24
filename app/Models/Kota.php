<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table = "kota";
    protected $primaryKey = 'id_kota';
    protected $fillable = [
        'id_kota',
        'nama_kota',
        'nama_pemimpin',
        'tanggal_berdiri',
        'jumlah_penduduk',
        'luas_wilayah',
        'jenis_kota',
        'keunggulan'
    ];
}


