<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Aunthentificatble;
use Illuminate\Notifications\Notifiable;
class Akun extends Aunthentificatble
{
    use Notifiable;

    protected $fillable = [
        'nama',
        'email',
        'username',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
