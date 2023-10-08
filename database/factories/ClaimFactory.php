<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClaimFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = ['Pending', 'In progress', 'Resolved', 'Closed'];

        return [
            'subject' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'claim_date' => now(),
            'status' => $this->faker->randomElement($status),
            'user_id' => User::factory(),
        ];
    }
}
