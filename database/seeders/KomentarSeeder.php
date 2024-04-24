<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomentarSeeder extends Seeder
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
                'tanggal_komentar' => date('Y-m-d'),
                'isi_komentar' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur, veniam culpa, laborum minima dolorem voluptates natus soluta doloribus nobis debitis delectus, officiis beatae ex.',
            ],
            [
                'foto_id' => 1,
                'user_id' => 2,
                'tanggal_komentar' => date('Y-m-d'),
                'isi_komentar' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur, veniam culpa, laborum minima dolorem voluptates natus soluta doloribus nobis debitis delectus, officiis beatae ex.',
            ],
            [
                'foto_id' => 2,
                'user_id' => 1,
                'tanggal_komentar' => date('Y-m-d'),
                'isi_komentar' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur, veniam culpa, laborum minima dolorem voluptates natus soluta doloribus nobis debitis delectus, officiis beatae ex.',
            ],
            [
                'foto_id' => 2,
                'user_id' => 2,
                'tanggal_komentar' => date('Y-m-d'),
                'isi_komentar' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur, veniam culpa, laborum minima dolorem voluptates natus soluta doloribus nobis debitis delectus, officiis beatae ex.',
            ],
        ];

        DB::table('komentar_foto')->insert($data);
    }
}
