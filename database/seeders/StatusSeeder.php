<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'status_name' => 'Registered',
        ]);
        Status::create([
            'status_name' => 'Verified',
        ]);
        Status::create([
            'status_name' => 'Rejected',
        ]);
        Status::create([
            'status_name' => 'Processed',
        ]);
        Status::create([
            'status_name' => 'Clossed',
        ]);
    }
}
