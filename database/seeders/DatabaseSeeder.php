<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleTableSeeder::class, UserTableSeeder::class, JobSeeder::class]);
            Employee::factory()->count(100)->create();
        $this->call([ScheduleSeeder::class]);
    }
}
