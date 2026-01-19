<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = Gallery::orderBy('id', 'desc')->paginate(10);
        return view('a-includes.gallery.list', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('a-includes.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable',
            'photos' => 'required|array',
            'description' => 'nullable'
        ]);

        $data['created_by'] = auth()->user()->id;

        foreach ($data['photos'] as $image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/images/gallery');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $image_path = 'images/gallery/' . $image_name;
            Image::make($image)->save(public_path($image_path));
            $data['image'] = $image_path;
            Gallery::create($data);
        }

        return redirect()->to('/gallery')->with('Gallery created successfully');
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
    public function edit(string $id)
    {
        $gallery = Gallery::find($id);
        return view('a-includes.gallery.edit', [ 'gallery' => $gallery ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gallery = Gallery::find($id);
        if (is_null($gallery)) {
            return redirect('/gallery')->with('message', 'Data not found');
        }

        $data = $request->validate([
            'title' => 'nullable',
            'photos' => 'required|array',
            'description' => 'nullable'
        ]);

        $data['created_by'] = auth()->user()->id;

        foreach ($data['photos'] as $image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/images/gallery');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $image_path = 'images/gallery/' . $image_name;
            Image::make($image)->save(public_path($image_path));
            $data['image'] = $image_path;
            tap(Gallery::findOrfail($id)->update($data));
        }

        return redirect()->to('/gallery');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::find($id);
        if (is_null($gallery)) {
            return redirect('/gallery')->with('message', 'Data not found');
        }
        $gallery->delete();
        return redirect('/gallery')->with('message', 'Gallery deleted successfully');
    }
}
