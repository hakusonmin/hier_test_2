<?php

use App\Http\Controllers\User\SkuController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\ProductController;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sku;

Route::prefix('user')
    ->middleware('auth') //userはデフォルトなので auth:userとしてはいけない
    ->name('user.')
    ->group(function () {
        Route::get('/', [CategoryController::class, 'root'])->name('category.root');

        Route::get('/category/{category}', [CategoryController::class, 'index'])->name('category.index');

        Route::get('/product/{product}', [ProductController::class, 'index'])->name('product.index');
    });
