<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return Inertia::render('Website/Home');
    }
    public function cart()
    {
        return Inertia::render('Website/Cart');
    }

    public function products()
    {
        return Inertia::render('Website/Products');
    }

    public function productDetails()
    {
        return Inertia::render('Website/ProductDetails');
    }

    public function checkout()
    {
        return Inertia::render('Website/Checkout');
    }

    public function payment()
    {
        return Inertia::render('Website/Payment');
    }

    public function about()
    {
        return Inertia::render('Website/About');
    }
}
