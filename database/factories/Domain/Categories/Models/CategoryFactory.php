<?php

namespace Database\Factories\Domain\Categories\Models;

use App\Domain\Files\Models\File;
use App\Domain\Categories\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'file_id' => File::factory()->create(),
            'name' => $this->faker->words(2, true),
            'description' => $this->faker->words(8, true),
        ];
    }
}
