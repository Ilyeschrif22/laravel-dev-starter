<?php

/**
 * Defines the namespace where the ProductService class belongs.
 * This class is located inside the app/Services directory.
 */
namespace App\Services;


/**
 * Imports the Product Eloquent model.
 * This allows the service to interact with the products database table.
 */
use App\Models\Product;


class ProductService
{
    /**
     * Get all products.
     */
    public function getAll()
    {
        return Product::all();
    }

    /**
     * Find a product by its ID.
     */
    public function getById($id)
    {
        return Product::find($id);
    }

    /**
     * Create a new product.
     */
    public function create(array $data)
    {
        return Product::create($data);
    }

    /**
     * Update an existing product.
     */
    public function update($id, array $data)
    {
        $product = Product::find($id);

        if (!$product) {
            return null;
        }

        $product->update($data);

        return $product;
    }

    /**
     * Delete a product by its ID.
     */
    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return false;
        }

        return $product->delete();
    }
}