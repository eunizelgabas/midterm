<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word,
            'type' => fake()->randomElement(['Private','Government','Multinational','Public']),
            'address' => fake()->address,
            'net_worth'=> fake()->randomFloat(10,2)
        ];
    }
}
