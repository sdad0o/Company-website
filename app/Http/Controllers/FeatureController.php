<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;

class FeatureController extends Controller
{
    private const DIR = 'admin.features.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $features = Feature::paginate(config('pagination.count'));
        return view(self::DIR . 'index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::DIR . 'create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeatureRequest $request)
    {
        $data = $request->validated();
        Feature::create($data);
        return to_route(self::DIR . 'index')->with('success', __('keywords.created_successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        return view(self::DIR . 'show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        return view(self::DIR . 'edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        $data = $request->validated();
        $feature->update($data);
        return to_route(self::DIR . 'index')->with('success', __('keywords.updated_successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();
        return to_route(self::DIR . 'index')->with('success', __('keywords.deleted_successfuly'));
    }
}
