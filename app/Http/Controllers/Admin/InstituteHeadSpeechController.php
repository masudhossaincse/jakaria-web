<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\InstituteHeadSpeech;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InstituteHeadSpeechController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = InstituteHeadSpeech::orderBy('id', 'desc')->paginate(10);
        return view('a-includes.institute-head-speech.list', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('a-includes.institute-head-speech.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'nullable',
            'image' => 'nullable',
            'description' => 'required'
        ]);
        $data = request(['title', 'description']);
        $data['created_by'] = auth()->user()->id;

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $img = Image::make($image->getRealPath());
            $img->resize(250, 250)->save($destinationPath . '/' . $input['imagename']);
            $destinationPath = public_path('/images/resize');
            $image->move($destinationPath, $input['imagename']);
            $data['image'] = 'images/' . $input['imagename'];
        }

        $inst = InstituteHeadSpeech::create($data);
        InstituteHeadSpeech::whereNotIn('id', [$inst->id])->update([
            'status' => false
        ]);
        return redirect()->to('/institute-head-speech')->with('Institute Head Speech created successfully');
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
        $inst_head = InstituteHeadSpeech::find($id);
        return view('a-includes.institute-head-speech.edit', [ 'inst_head' => $inst_head ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'title' => 'nullable',
            'image' => 'nullable',
            'description' => 'required'
        ]);
        $data = request(['title', 'description']);
        $data['updated_by'] = auth()->user()->id;

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $img = Image::make($image->getRealPath());
            $img->resize(250, 250)->save($destinationPath . '/' . $input['imagename']);
            $destinationPath = public_path('/images/resize');
            $image->move($destinationPath, $input['imagename']);
            $data['image'] = 'images/' . $input['imagename'];
        }

        tap(InstituteHeadSpeech::findOrfail($id)->update($data));
        InstituteHeadSpeech::find($id)->update([
            'status' => true
        ]);
        InstituteHeadSpeech::whereNotIn('id', [$id])->update([
            'status' => false
        ]);
        return redirect()->to('/institute-head-speech');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $speech = InstituteHeadSpeech::find($id);
        if (is_null($speech)) {
            return redirect('/institute-head-speech')->with('message', 'Data not found');
        }
        $speech->delete();
        return redirect('/institute-head-speech')->with('message', 'Institute Head Speech deleted successfully');
    }
}
