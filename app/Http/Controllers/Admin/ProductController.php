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
        $products = Product::with(['category', 'media'])->get();
        // return $products;

        return Inertia::render('Admin/Products/Index', [
            'products' => $products,
            'titlte' => 'Products',
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

        if ($request->hasFile('image')) {
            $product->addMediaFromRequest('image')->toMediaCollection('image');
        }

        return back()->with('success', __('app.label.created_successfully', ['name' => $product->name]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // dd($product);
        return Inertia::render('Admin/Products/Show', []);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product = Product::with('media')->find($product->id);
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
    public function update(Request $request, Product $product)
    {
        // return $request->all();
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
        if ($request->hasFile('image')) {
            // Remove existing media
            $product->clearMediaCollection('image');

            // Add new media
            $product->addMediaFromRequest('image')->toMediaCollection('image');
        }

        return Inertia::render('Admin/Products/Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Deleted Successfully !');
    }

    public function forceDelete($product)
    {
        $product = Product::withTrashed()->find($product);
        $product->forceDelete();
    }

    // Trash List Deleted Products
    public function deleteTrashList()
    {
        $product = Product::onlyTrashed()->get();
        $product->each->forceDelete();
    }

    //Restore Single product
    public function restore($preduct)
    {
        $product = Product::withTrashed()->find($preduct);

        if ($product) {
            $product->restore();
            return back()->with('success', 'Product has been restored successfully.');
        } else {
            return back()->with('error', 'Product not found.');
        }
    }

    // Restore All Product Data
    public function restoreAll()
    {
        $products = Product::onlyTrashed()->get();

        foreach ($products as $product) {
            $product->restore();
        }
    }

    //show TrashList Product
    public function trashList()
    {
        $products = Product::with(['category', 'media'])
            ->onlyTrashed()
            ->paginate(10);
        // return $products;
        return Inertia::render('Admin/Products/TrashList', [
            'products' => $products,
        ]);
    }
}
