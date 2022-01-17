<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->userName(),
            'password' => 'admin',
            'education' => $this->faker->randomElement(['sd', 'smp', 'sma', 'd3', 's1', 's2', 's3']),
            'phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'gender' => $this->faker->randomElement(['laki-laki', 'perempuan']),
            'entry_date' => $this->faker->date(),
            'job_id' => rand(1,3),
            'basic_salary' => $this->faker->numberBetween(1,200)*100000,
            'status' => $this->faker->randomElement(['tetap', 'kontrak'])
        ];
    }
}
