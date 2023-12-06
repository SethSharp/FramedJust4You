<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['role:admin,manager'])->get('/dashboard', \App\Http\Controllers\ShowDashboardController::class)->name('dashboard');

    Route::middleware('auth')->name('profile.')->group(function () {
        Route::get('/profile', \App\Http\Controllers\Profile\EditProfileController::class)->name('edit');
        Route::patch('/profile', \App\Http\Controllers\Profile\UpdateProfileController::class)->name('update');
        Route::delete('/profile', \App\Http\Controllers\Profile\DeleteProfileController::class)->name('destroy');
    });

    Route::middleware('role:admin,manager')->prefix('categories')->name('categories.')->group(function () {
        Route::get('/', \App\Http\Controllers\Categories\IndexCategoryController::class)->name('index');
        Route::get('/create', \App\Http\Controllers\Categories\CreateCategoryController::class)->name('create');
        Route::post('/store', \App\Http\Controllers\Categories\StoreCategoryController::class)->name('store');
        Route::get('/edit/{category}', \App\Http\Controllers\Categories\EditCategoryController::class)->name('edit');
        Route::post('/update/{category}', \App\Http\Controllers\Categories\UpdateCategoryController::class)->name('update');
        Route::delete('/delete/{category}', \App\Http\Controllers\Categories\DeleteCategoryController::class)->name('delete');
    });

    Route::middleware('role:admin,manager')->prefix('products')->name('products.')->group(function () {
        Route::get('/', \App\Http\Controllers\Products\IndexProductsController::class)->name('index');
    });

    Route::post('/store/file', \App\Http\Controllers\Files\StoreFileController::class)->name('file.store');
});
