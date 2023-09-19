<?php

namespace App\Http\Controllers\admin\porfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\BioFormRequest;
use App\Models\admin\Bio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.bio.index', [
            "bios" =>Bio::orderBy("created_at", 'desc')->paginate(0)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $bio = new Bio();
        return view("admin.bio.form", [
            'bio'=>$bio
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BioFormRequest $request)
    {
        //
        $data = $request->validated();

        if ($request->hasFile('image')) {
            # code...
            $imagePath = $request->file('image')->store('bios', 'public');

            $data['image_path'] = pathinfo($imagePath, PATHINFO_BASENAME);

           
        }
        $bio = Bio::create($data);

        return to_route('admin.bio.index')->with('success', 'Your Bio Is added successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bio $bio)
    {
        //
        return view ('admin.bio.form', [
            'bio'=> $bio
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BioFormRequest $request, Bio $bio)
    {
        //
        $data = $request->validated();

        if ($request->hasFile('image')) {
            # code...
            if ($bio->image) {
                # code...
                Storage::disk("bios",'public')->delete($bio->image);  
            }
            $imagePath = $request->file('image')->store("bios",'public');
           
            $data['image_path'] = $imagePath;
        }

        $bio->update($data);

        return to_route('admin.bio.index')->with('success', 'Your Bio Is Modified successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bio $bio)
    {
        //
        $bio->delete();
    }
}
