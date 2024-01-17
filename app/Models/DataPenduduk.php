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
        'tgl_lahir',
        'no_telp',
        'no_paspor',
        'nik',
        'jenis_kelamin',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'nama_ayah',
        'nama_ibu',
        'foto',
        'username',
        'email',
        'password',
        'kode_ID'
    ];

    public function provinsi()
    {
        return $this->belongsTo(Province::class, 'provinsi', 'id_provinsi');
    }
}
