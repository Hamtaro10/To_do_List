<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Schedule::class;

    public function definition(): array
    {
        return [
            'user_id'     => 1,
            'category_id' => null,
            'title'       => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'start_time'  => $this->faker->dateTimeBetween('now', '+1 week'),
            'end_time'    => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            'priority'    => $this->faker->randomElement(['low', 'medium', 'high']),
            'status'      => $this->faker->randomElement(['pending', 'on_progress', 'completed', 'canceled']),
        ];
    }
}
