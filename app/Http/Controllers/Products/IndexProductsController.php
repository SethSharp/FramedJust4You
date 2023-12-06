<?php

namespace App\Http\Controllers\Products;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Domain\Products\Models\Product;

class IndexProductsController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Products/Index', [
            'products' => Product::with(['file', 'category'])->get()
        ]);
    }
}
