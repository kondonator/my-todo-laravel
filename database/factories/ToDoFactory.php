<?php

namespace Database\Factories;

use App\Enums\ToDoStatuses;
use App\Models\ToDo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ToDo>
 */
class ToDoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            ToDo::USER_ID => 0,
            ToDo::TITLE => fake()->company(),
            ToDo::DESCRIPTION => fake()->sentence(),
            ToDo::TO_BE_DONE_ON => null,
            ToDo::TO_BE_DONE_AT => null,
            ToDo::STATUS => ToDoStatuses::TODO,
            ToDo::CREATED_AT => now(),
            ToDo::UPDATED_AT => now(),
        ];
    }

    /**
     * Indicate that the model's status should be doing.
     */
    public function doing(): static
    {
        return $this->state(fn (array $attributes) => [
            ToDo::STATUS => ToDoStatuses::DOING,
        ]);
    }

    /**
     * Indicate that the model's status should be done.
     */
    public function done(): static
    {
        return $this->state(fn (array $attributes) => [
            ToDo::STATUS => ToDoStatuses::DONE,
        ]);
    }
}
