<?php

namespace App\Domain\Products\Models;

use App\Domain\Files\Models\File;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Categories\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function file(): BelongsTo
    {
        return $this->belongsTo(File::class);
    }

    public function files(): BelongsToMany
    {
        return $this->belongsToMany(File::class, 'file_products')->withTimestamps();
    }
}
