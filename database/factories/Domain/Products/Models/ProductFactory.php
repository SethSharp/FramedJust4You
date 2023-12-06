<?php

namespace Database\Factories\Domain\Products\Models;

use App\Domain\Files\Models\File;
use App\Domain\Products\Models\Product;
use App\Domain\Categories\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'file_id' => File::factory()->create(),
            'category_id' => Category::factory()->create(),
            'title' => $this->faker->title,
            'description' => $this->faker->words(12, true),
            'price' => $this->faker->numberBetween(10, 100)
        ];
    }
}
