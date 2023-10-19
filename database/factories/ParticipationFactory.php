<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participation>
 */
class ParticipationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
//            'nomUser'=>$this->faker->sentence,
            'proposedObject'=>$this->faker->sentence,
            'descriptionObject'=>$this->faker->paragraph,
            'statusObject'=>$this->faker->boolean,
            'changedBy' => $this->faker->randomElement(['Stylo', 'Chaise', 'Bureau', 'Autre']),
            'event_id' => Event::pluck('id')->random(),
            'user_id' => User::pluck('id')->random()




            //
        ];
    }
}
