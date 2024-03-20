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
        $products = Product::with('category')->paginate(10);

        return Inertia::render('Admin/Products/Index', [
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
            'vendors' => $vendors,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'vendor_id' => $request->vendor_id,
            'title' => $request->title,
            'description' => $request->description,
            'cost_price' => $request->cost_price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'min_quantity' => $request->min_quantity,
            'sizes' => $request->sizes,
            'colors' => $request->colors,
            'warranty' => $request->warranty,
            'status' => $request->status,
            'created_by' => auth()->user()->name, // Get the authenticated user's ID
            'updated_by' => auth()->user()->name, // Get the authenticated user's ID
        ]);

        return Inertia::render('Admin/Products/Create', [
            'successMessage' => $request->session()->get('success'),
            'errorMessage' => $request->session()->get('error'),
        ]);

        // Check if product images were uploaded
        // if ($request->hasFile('product_images')) {
        //     // Loop through each uploaded file and store it using the Spatie Media Library
        //     foreach ($request->file('product_images') as $image) {
        //         $product->addMedia($image)->toMediaCollection('product_images');
        //     }
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // dd($product);
        return Inertia::render('Admin/Products/Show', [
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $vendors = Vendor::all();
        return Inertia::render('Admin/Products/Edit', [
            'product' => $product,
            'categories' => $categories,
            'brands' => $brands,
            'vendors' => $vendors,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // dd($request->all());
        $product->update([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'vendor_id' => $request->vendor_id,
            'title' => $request->title,
            'description' => $request->description,
            'cost_price' => $request->cost_price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'min_quantity' => $request->min_quantity,
            'sizes' => $request->sizes,
            'colors' => $request->colors,
            'warranty' => $request->warranty,
            'status' => $request->status,
            'updated_by' => auth()->user()->name, // Get the authenticated user's ID
        ]);

        return Inertia::render('Admin/Products/Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
