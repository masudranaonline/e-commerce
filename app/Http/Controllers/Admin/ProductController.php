<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Models\Admin\Brand;
use App\Models\Admin\Vendor;
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
    public function store(StoreProductRequest $request)
    {
        // return $request;
        // Product::create([
        //     'category_id' => $request->category_id,
        //     'brand_id' => $request->brand_id,
        //     'vendor_id' => $request->vendor_id,
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'cost_price' => $request->cost_price,
        //     'sale_price' => $request->sale_price,
        //     'quantity' => $request->quantity,
        //     'min_quantity' => $request->min_quantity,
        //     'sizes' => $request->sizes,
        //     'colors' => $request->colors,
        //     'warranty' => $request->warranty,
        //     'status' => $request->status,
        //     'created_by' => "masud",
        //     'updated_by' => "masud",

        // ]);

        $products = Product::create($request->all()); // Or use $request->all() if no validation

        return Inertia::render('Products/Index', [
            // ... data to pass to the frontend
            'products' => $products
        ]);

        
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
