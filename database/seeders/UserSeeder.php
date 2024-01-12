<?php

namespace Database\Seeders;

use App\Models\Akun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Akun::create([
            'nama'      => 'Admin',
            'email'      => 'admin@gmail.com',
            'username'  => 'admin',
            'role'      => 'admin',
            'password' => bcrypt('123'),
        ]);
        Akun::create([
            'nama'      => 'Rina',
            'email'      => 'Rina@gmail.com',
            'username'  => 'rina',
            'role'      => 'pengelola',
            'password' => bcrypt('1608'),
        ]);
    }
}
