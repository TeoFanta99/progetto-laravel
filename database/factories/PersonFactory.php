<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $event = Event :: inRandomOrder() -> first();

        return [
            'firstname' => fake() -> firstName(),
            'lastname' => fake() -> lastName(),
            'event_id' => $event -> id,
        ];
    }
}
