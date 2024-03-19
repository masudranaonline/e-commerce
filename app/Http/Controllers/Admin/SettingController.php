<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Models\Admin\Setting;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Admin/Settings/Index', [
            'settings' => Setting::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        return Inertia::render('Admin/Settings/Edit', [
            'settings' => $setting,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        
        $setting->update([
            'site_name'         => $request->site_name,
            'site_description'  => $request->site_description,
            'site_logo'         => $request->site_logo,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'whatsup'           => $request->whatsup,
            'address'           => $request->address,
            'facebook'          => $request->facebook,
            'twitter'           => $request->twitter,
            'instagram'         => $request->instagram,
            'youtube'           => $request->youtube,
            'linkedin'          => $request->linkedin,
            'map'               => $request->map,
            'copyright'         => $request->copyright,
            'language'          => $request->language,
        ]);

        return Inertia::render('Admin/Settings/Edit', [
            'settings' => $setting,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
