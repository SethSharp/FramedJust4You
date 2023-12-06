<?php

namespace Database\Factories\Domain\Files\Models;

use App\Domain\Files\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    protected $model = File::class;

    public function definition(): array
    {
        return [
            'path' => $this->image(),
        ];
    }

    protected function image(): string
    {
        $images = [
            'https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg'
        ];

        return $images[array_rand($images)];
    }
}
