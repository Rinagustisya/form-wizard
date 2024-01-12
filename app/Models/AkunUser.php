<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
        'kode_ID'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
