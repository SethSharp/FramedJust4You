<?php

namespace Database\Factories\Domain\Products\Models;

use App\Domain\Products\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'description' => $this->faker->words(12, true),
            'price' => $this->faker->numberBetween(10, 100)
        ];
    }
}
