<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'no_telp',
        'no_paspor',
        'nik',
        'jenis_kelamin',
        'alamat',
        'provinsi',
        'kecamatan',
        'kelurahan',
        'nama_ayah',
        'nama_ibu',
        'foto'
    ];
}
