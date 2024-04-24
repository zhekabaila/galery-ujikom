<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'username' => 'user',
                'password' => Hash::make(123),
                'email' => 'user@gmail.com',
                'nama_lengkap' => 'user',
                'alamat' => 'indonesia'
            ],
            [
                'username' => 'user2',
                'password' => Hash::make(123),
                'email' => 'user2@gmail.com',
                'nama_lengkap' => 'user2',
                'alamat' => 'indonesia'
            ],
        ];

        DB::table('user')->insert($data);
    }
}
