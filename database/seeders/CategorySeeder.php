<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Files\Models\File;
use App\Domain\Categories\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $numOfCategories = 4;

        $categories = Category::factory()->count($numOfCategories)->create([
            'file_id' => null,
        ]);

        foreach ($categories as $index => $category) {
            $category->update([
                'file_id' => File::factory()->create([
                    'path' => '/images/seeding/categories/' . $index + 1 . '.webp'
                ])->id
            ]);
        }
    }
}
