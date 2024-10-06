<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'ID'
            'name' => fake()->name(),// 'Name'
            'email' => fake()->email(),// 'Email'
            'birthdate' => fake()->date(),// 'Birthdate'
            'home_address' =>fake()->address(),// 'Home Address'
            'contact_number' => fake()->phoneNumber(),// 'Contact Number'
        ];
    }
}
