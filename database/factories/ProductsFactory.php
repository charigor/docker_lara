<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    protected $model = \App\Models\Products::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company(),
            'short_desc' => $this->faker->text(50),
            'desc' => $this->faker->text(100),
            'price' => $this->faker->numberBetween($min = 100, $max = 9000)
        ];
    }
}
