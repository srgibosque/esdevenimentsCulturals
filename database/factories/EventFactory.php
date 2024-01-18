<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;
use Faker\Generator as Faker;

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
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'location' => $this->faker->city,
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'image' => 'default.png',
            'author' => $this->faker->lastName,
        ];
    }
}
