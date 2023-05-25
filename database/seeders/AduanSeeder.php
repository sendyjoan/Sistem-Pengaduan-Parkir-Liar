<?php

namespace Database\Seeders;

use App\Models\Aduan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aduan::create([
            'judul' => 'Judul Aduan Seeder 1',
            'deskripsi' => 'deskripsi dari aduan 1',
            'foto' => 'sfddsfsdaf',
        ]);
    }
}
