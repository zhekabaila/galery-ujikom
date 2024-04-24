<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul_foto' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
                'deskripsi_foto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste asperiores nam cum illo atque corporis quibusdam possimus. Numquam, fuga!',
                'tanggal_unggah' => date('Y-m-d'),
                'lokasi_file' => 'public/Stock (1).jpg',
                'user_id' => 1
            ],
            [
                'judul_foto' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
                'deskripsi_foto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste asperiores nam cum illo atque corporis quibusdam possimus. Numquam, fuga!',
                'tanggal_unggah' => date('Y-m-d'),
                'lokasi_file' => 'public/Stock (2).jpg',
                'user_id' => 1
            ],
            [
                'judul_foto' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
                'deskripsi_foto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste asperiores nam cum illo atque corporis quibusdam possimus. Numquam, fuga!',
                'tanggal_unggah' => date('Y-m-d'),
                'lokasi_file' => 'public/Stock (3).jpg',
                'user_id' => 2
            ],
            [
                'judul_foto' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
                'deskripsi_foto' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste asperiores nam cum illo atque corporis quibusdam possimus. Numquam, fuga!',
                'tanggal_unggah' => date('Y-m-d'),
                'lokasi_file' => 'public/Stock (4).jpg',
                'user_id' => 2
            ],
        ];

        DB::table('foto')->insert($data);
    }
}
