<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'order_number' => 'ORDER-'.$this->faker->unique()->randomNumber(8),
            'total_amount' => $this->faker->randomFloat(2, 100, 10000),
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed', 'cancelled']),
        ];
    }
}
