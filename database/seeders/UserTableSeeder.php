<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Azi Dahaka',
            'email' => 'azi@gmail.com',
            'password' => bcrypt('admin')
        ])->assignRole('keuangan');

        User::create([
            'name' => 'Farid Ahmad Fadhilah',
            'email' => 'farid@gmail.com',
            'password' => bcrypt('admin')
        ])->assignRole('personalia');
    }
}
