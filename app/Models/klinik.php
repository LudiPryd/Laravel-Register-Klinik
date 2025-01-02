<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klinik extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nama',
        'No_Telepon',
        'Alamat',
        'Jenis_Peliharaan',
        'tgl_kunjungan',
        'Sesi',
        'Keluhan'
    ];
}
