<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'foto_id' => 1,
                'user_id' => 1,
                'tanggal_like' => date('Y-m-d'),
            ],
            [
                'foto_id' => 1,
                'user_id' => 2,
                'tanggal_like' => date('Y-m-d'),
            ],
            [
                'foto_id' => 2,
                'user_id' => 1,
                'tanggal_like' => date('Y-m-d'),
            ],
            [
                'foto_id' => 2,
                'user_id' => 2,
                'tanggal_like' => date('Y-m-d'),
            ],
        ];

        DB::table('like_foto')->insert($data);
    }
}
