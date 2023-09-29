<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $color = $this->faker->hexColor;
        $start = $this->faker->dateTimeBetween('-30 days', '+30 days')->format('Y-m-d H:i:s');
        $end = $this->faker->dateTimeBetween($start, '+30 days')->format('Y-m-d H:i:s');
        return [

'nom'=>$this->faker->sentence,
            'lieu'=>$this->faker->address,
            'date'=>$this->faker->date,
            'description'=>$this->faker->paragraph,
            'categorie' => $this->faker->randomElement(['Vêtements', 'Électronique', 'Nourriture', 'Autre']),
            'start'=>$start,
            'end'=>$end,
'color' => $color,



//            $table->id();
//        $table->string('nom');
//        $table->string('Lieu');
//        $table->string('categorie')->default('Autre');
//        $table->date('date');
//        $table->text('description');
        ];
    }
}
