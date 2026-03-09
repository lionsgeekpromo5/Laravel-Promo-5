<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function Flasher\Prime\flash;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('Gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('Gallery.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'photographer' => 'required',
            'category' => 'required'

        ]);
        
        $path = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'image' => $path,
            'photographer' => $request->photographer,
            'category' => $request->category
        ]);
        flash()
            ->title('Product Added')
            ->success('Image has beed added successfully');
        return redirect('/gallery');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        $categories = Category::all();
        return view('Gallery.edit', compact('categories', 'gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'photographer' => 'required',
            'category' => 'required'
        ]);

        $path = $gallery->image;
        if($request->hasFile('image')){
            //* check if the path exists in public storage
            $isExist = Storage::disk('public')->exists($path);
            if($isExist){
                //* delete old image from piublic storage

                Storage::disk('public')->delete($path);
                //* store new image in the public storage
                $path = $request->file('image')->store('gallery', 'public');
            }
            
        }

        //*  update data in database
        $gallery->update([
            'photographer' => $request->photographer,
            'category' => $request->category,
            'image' => $path
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $path = $gallery->image;
        //* delete image from public storgae
        Storage::disk('public')->delete($path);
         //* delete it from database
        $gallery->delete();
        flash()
            ->title('Image Deleted')
            ->position('top-left')
            ->success('Image has been deleted Successfully');
        return back();
    }
}
