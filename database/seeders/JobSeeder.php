<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            ['title' => 'IT Programmer', 'subsidy' => 500000, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Web Designer', 'subsidy' => 600000, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Analyst Programmer', 'subsidy' => 40000, 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('jobs')->insert($jobs);


    }
}
