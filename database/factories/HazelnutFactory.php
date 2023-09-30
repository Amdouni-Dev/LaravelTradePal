<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HazelnutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = ['active', 'expired', 'pending'];

        return [
            'amount' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->randomElement($status),
            'expiration_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'user_id' => User::factory(),
        ];
    }
}
