<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'content'=> $this->faker->name(20),
            'user_id' => \App\Models\User::factory(),
            'blog_id' => \App\Models\Blog::factory(),
            'likes'=> $this->faker->randomElement([0, 1]),
        ];
    }
}
