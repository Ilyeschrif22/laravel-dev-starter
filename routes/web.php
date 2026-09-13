<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/** default route */
Route::get('/', function () {
    return view('welcome');
});




/** products routes */

/**
 * Get all products.
 */
Route::get('/products', [ProductController::class, 'getAllProducts']);

/**
 * Get one product by ID.
 */
Route::get('/products/{id}', [ProductController::class, 'getProductById']);

/**
 * Create a new product.
 */
Route::post('/products', [ProductController::class, 'createProduct']);

/**
 * Update a product.
 */
Route::put('/products/{id}', [ProductController::class, 'updateProduct']);

/**
 * Delete a product.
 */
Route::delete('/products/{id}', [ProductController::class, 'deleteProduct']);


/**
 * Display the product creation page.
 */
Route::get('/product', [ProductController::class, 'showProductPage']);
Route::get('/allProducts', [ProductController::class, 'showAllProductsPage']);