<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\HomeSlider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = HomeSlider::orderBy('id', 'desc')->paginate(10);
        return view('a-includes.home-slider.list', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('a-includes.home-slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'description' => 'required'
        ]);
        $data = request(['title', 'description']);
        $data['created_by'] = auth()->user()->id;

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/slider');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $img = Image::make($image->getRealPath());
//            $img->resize(1920, 500)->save($destinationPath . '/' . $input['imagename']);
            $img->save($destinationPath . '/' . $input['imagename']);
            $destinationPath = public_path('/images/slider/resize');
            $image->move($destinationPath, $input['imagename']);
            $data['image'] = 'images/slider/' . $input['imagename'];
        }

         HomeSlider::create($data);

        return redirect()->to('/home-slider')->with('Home slider created successfully');
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
        $slider = HomeSlider::find($id);
        return view('a-includes.home-slider.edit', [ 'slider' => $slider ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'title' => 'nullable',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000'
        ]);
        $data = request(['title', 'description']);
        $data['updated_by'] = auth()->user()->id;

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/slider');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $img = Image::make($image->getRealPath());
//            $img->resize(1920, 500)->save($destinationPath . '/' . $input['imagename']);
            $img->save($destinationPath . '/' . $input['imagename']);
            $destinationPath = public_path('/images/slider/resize');
            $image->move($destinationPath, $input['imagename']);
            $data['image'] = 'images/slider/' . $input['imagename'];
        }
        tap(HomeSlider::findOrfail($id)->update($data));

        return redirect()->to('/home-slider');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = HomeSlider::find($id);
        if (is_null($slider)) {
            return redirect('/home-slider')->with('message', 'Data not found');
        }
        $slider->delete();
        return redirect('/home-slider')->with('message', 'Home slider deleted successfully');
    }
}
