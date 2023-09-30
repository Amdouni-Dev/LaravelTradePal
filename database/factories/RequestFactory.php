<?php

namespace Database\Factories;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Request>
 */
class RequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'desired_id' => Item::inRandomOrder()->first()->id,
            'exchangeable_id' => Item::inRandomOrder()->first()->id,
            'note' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['EN_COURS', 'CONFIRME', 'ANNULE']),
        ];
    }
}
