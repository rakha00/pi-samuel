<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence(2);

        return [
            "name" => $name,
            "description" => $this->faker->text(),
            "image" => "https://placehold.co/400",
            "slug" => Str::slug($name),
            "price" => $this->faker->numberBetween(10000, 100000),
        ];
    }
}
