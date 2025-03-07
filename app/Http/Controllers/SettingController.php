<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    private const DIR = 'admin.settings.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $setting = Setting::findOrFail(1);
        return view(self::DIR . 'index', get_defined_vars());
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $data = $request->validated();
        $setting->update($data);
        return to_route(self::DIR . 'index')->with('success', __('keywords.updated_successfuly'));
    }
}
