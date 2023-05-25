<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['role_name' => 'superuser'],
            ['role_name' => 'administrator'],
            ['role_name' => 'petugas'],
            ['role_name' => 'pengguna'],
        ];

        DB::table('roles')->insert($roles);
    }
}
