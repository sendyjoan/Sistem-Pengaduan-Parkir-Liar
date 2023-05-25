<?php

namespace Database\Seeders;

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
        $statuses = [
            ['status_name' => 'Registered'],
            ['status_name' => 'Verified'],
            ['status_name' => 'Rejected'],
            ['status_name' => 'Processed'],
            ['status_name' => 'Clossed'],
        ];

        DB::table('statuses')->insert($statuses);
    }
}
