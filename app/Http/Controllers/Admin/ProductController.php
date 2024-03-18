<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Models\Admin\Brand;
use App\Models\Admin\Vendor;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get();

        return Inertia::render('Admin/Products/Index',[
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $vendors = Vendor::all();

        return Inertia::render('Admin/Products/Create', [
            'categories' => $categories,
            'brands' => $brands,
            'vendors' => $vendors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest  $request)
    {

        $validatedData = $request->validated();

        // Create the product
        $product = Product::create([
            'category_id'   => $validatedData['category_id'],
            'brand_id'      => $validatedData['brand_id'],
            'vendor_id'     => $validatedData['vendor_id'],
            'title'         => $validatedData['title'],
            'description'   => $validatedData['description'],
            'cost_price'    => $validatedData['cost_price'],
            'sale_price'    => $validatedData['sale_price'],
            'quantity'      => $validatedData['quantity'],
            'min_quantity'  => $validatedData['min_quantity'],
            'sizes'         => $validatedData['sizes'],
            'colors'        => $validatedData['colors'],
            'warranty'      => $validatedData['warranty'],
            'status'        => $validatedData['status'],
            'created_by'    => auth()->user()->name, // Get the authenticated user's ID
            'updated_by'    => auth()->user()->name, // Get the authenticated user's ID
        ]);
    
        // Check if product images were uploaded
        if ($request->hasFile('product_images')) {
            // Loop through each uploaded file and store it using the Spatie Media Library
            foreach ($request->file('product_images') as $image) {
                $product->addMedia($image)->toMediaCollection('product_images');
            }
        }
    
        // Optionally, you can return a response here
        return Inertia::render('Products/Index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
