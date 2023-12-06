<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Files\Models\File;
use App\Domain\Products\Models\Product;

class ProductTableSeeder extends Seeder
{
    public function run(): void
    {
        $productCount = 4;
        // loop this over how many files there are and adjust the factory to pass to file factory
        $products = Product::factory()->count($productCount)->create();

        foreach ($products as $index => $product) {
            $product->update([
                'file_id' => File::factory()->create([
                    'path' => '/images/seeding/categories/' . $index + 1 . '.webp'
                ])->id,
                'category_id' => $index + 1
            ]);
        }
    }
}
