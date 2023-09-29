<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donation>
 */
class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(), 
            'category' => $this->faker->randomElement(['individual', 'corporate', 'in-kind']),
            'timestamp' => $this->faker->dateTimeThisYear(),
            'organization_id' => \App\Models\Organization::factory(), 
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'object' => $this->faker->sentence,
        ];
    }
}
