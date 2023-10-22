<?php

namespace Database\Factories;

use \App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
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
            'name' => $this->faker->word,
            'category' => $this->faker->randomElement(['ELECTRONIQUE', 'VETEMENTS', 'MEUBLES', 'LIVRES', 'AUTRES']),
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['DISPONIBLE', 'NONDISPONIBLE']),
            'amount' => $this->faker->randomFloat(2, 1, 1000),
            'picture' => $this->faker->image(public_path('echange/items'), 400, 300, null, false)
            

        ];
    }
}
