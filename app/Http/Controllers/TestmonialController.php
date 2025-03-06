<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use App\Http\Requests\StoreTestmonialRequest;
use App\Http\Requests\UpdateTestmonialRequest;
use Illuminate\Support\Facades\Storage;

class TestmonialController extends Controller
{
    private const DIR = 'admin.testmonials.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $testmonials = Testmonial::paginate(config('pagination.count'));
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
    public function store(StoreTestmonialRequest $request)
    {
        $data = $request->validated();
        // image uploading 
        // 1- get image
        $image = $request->image;
        // 2- change it's current name
        $newImageName = time() . '-' . $image->getClientOriginalName();
        // 3- move image to my project
        $image->storeAs('testmonials', $newImageName, 'public');
        // 4- save new name to database record
        $data['image'] = $newImageName;
        Testmonial::create($data);
        return to_route(self::DIR . 'index')->with('success', __('keywords.created_successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testmonial $testmonial)
    {
        return view(self::DIR . 'show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testmonial $testmonial)
    {
        return view(self::DIR . 'edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestmonialRequest $request, Testmonial $testmonial)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            // image uploading 
            // 0- delete old image
            Storage::delete("public/testmonials/$testmonial->image");
            // 1- get image
            $image = $request->image;
            // 2- change it's current name
            $newImageName = time() . '-' . $image->getClientOriginalName();
            // 3- move image to my project
            $image->storeAs('testmonials', $newImageName, 'public');
            // 4- save new name to database record
            $data['image'] = $newImageName;
        }
        $testmonial->update($data);
        return to_route(self::DIR . 'index')->with('success', __('keywords.updated_successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testmonial $testmonial)
    {
        Storage::delete("public/testmonials/$testmonial->image");
        $testmonial->delete();
        return to_route(self::DIR . 'index')->with('success', __('keywords.deleted_successfuly'));
    }
}
