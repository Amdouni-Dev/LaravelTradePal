<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string=> $this->faker->name(20), mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->name(20),
            'content'=> $this->faker->name(20),
            'tags'=> $this->faker->name(20),
            'likes'=> $this->faker->randomNumber(2),
            'views'=> $this->faker->randomNumber(2),
            'status'=> $this->faker->name(20),
            'featuredImage'=> $this->faker->name(20),
            'publicationDate'=> now(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
