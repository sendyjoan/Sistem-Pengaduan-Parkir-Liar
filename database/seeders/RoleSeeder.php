<?php

namespace Database\Seeders;

use App\Models\Role;
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
        Role::create([
            'role_name' => 'superuser',
        ]);
        Role::create([
            'role_name' => 'administrator',
        ]);
        Role::create([
            'role_name' => 'petugas',
        ]);
        Role::create([
            'role_name' => 'pengguna',
        ]);
    }
}
