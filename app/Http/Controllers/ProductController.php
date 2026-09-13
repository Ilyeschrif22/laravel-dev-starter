<?php
/**
 * Defines the namespace where the ProductController class belongs.
 * This controller is located inside the app/Http/Controllers directory.
 */
namespace App\Http\Controllers;


/**
 * Imports the ProductService class.
 * This allows the controller to use the service for product business logic.
 */
use App\Services\ProductService;


/**
 * Imports Laravel's Request class.
 * This allows the controller to access and validate incoming HTTP request data.
 */
use Illuminate\Http\Request;



class ProductController extends Controller
{
    /**
     * Get all products.
     */
    public function getAllProducts(ProductService $productService)
    {
        $products = $productService->getAll();

        return response()->json($products);
    }

    /**
     * Get a product by its ID.
     */
    public function getProductById($id, ProductService $productService)
    {
        $product = $productService->getById($id);

        if (!$product) {
            return response()->json([
                'message' => 'Product not found'
            ], 404);
        }

        return response()->json($product);
    }

    /**
     * Create a new product.
     */
    public function createProduct(
        Request $request,
        ProductService $productService
    ) {
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable|string'
        ]);

        $product = $productService->create($data);

        return response()->json($product, 201);
    }

    /**
     * Update an existing product.
     */
    public function updateProduct(
        $id,
        Request $request,
        ProductService $productService
    ) {
        $data = $request->validate([
            'name' => 'sometimes|string',
            'price' => 'sometimes|numeric',
            'description' => 'nullable|string'
        ]);

        $product = $productService->update($id, $data);


        /** if product not found */
        if (!$product) {
            return response()->json([
                'message' => 'Product not found'
            ], 404);
        }

        return response()->json($product);
    }

    /**
     * Delete a product.
     */
    public function deleteProduct($id, ProductService $productService)
    {
        $deleted = $productService->delete($id);

        if (!$deleted) {
            return response()->json([
                'message' => 'Product not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Product deleted successfully'
        ]);
    }


    public function showProductPage()
    {
        return view('product');
    }

    public function showAllProductsPage(ProductService $productService)
    {
        $products = $productService->getAll();

        return view('allProducts', compact('products'));
    }



}