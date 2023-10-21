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
        $status = ['PENDING', 'IN PROGRESS', 'RESOLVED', 'CLOSED'];

        return [
            'subject' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'claim_date' => now(),
            'status' => $this->faker->randomElement($status),
            'claimImage' => $this->faker->image(public_path('claims'), 400, 300, null, false),
            'user_id' => User::factory(),
        ];
    }
}
