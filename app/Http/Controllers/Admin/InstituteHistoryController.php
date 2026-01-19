<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\InstituteHistory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InstituteHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = InstituteHistory::orderBy('id', 'desc')->paginate(10);
        return view('a-includes.institute-history.list', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('a-includes.institute-history.create');
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
            $destinationPath = public_path('/images/institute');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $img = Image::make($image->getRealPath());
            $img->resize(1200, 500)->save($destinationPath . '/' . $input['imagename']);
            $destinationPath = public_path('/images/resize/institute');
            $image->move($destinationPath, $input['imagename']);
            $data['image'] = 'images/institute/' . $input['imagename'];
        }

        $inst = InstituteHistory::create($data);
        InstituteHistory::whereNotIn('id', [$inst->id])->update([
            'status' => false
        ]);
        return redirect()->to('/institute-history');
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
        $history = InstituteHistory::find($id);
        return view('a-includes.institute-history.edit', ['inst_history' => $history]);
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

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/institute');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $img = Image::make($image->getRealPath());
            $img->resize(1200, 500)->save($destinationPath . '/' . $input['imagename']);
            $destinationPath = public_path('/images/resize/institute');
            $image->move($destinationPath, $input['imagename']);
            $data['image'] = 'images/institute/' . $input['imagename'];
        }

        tap(InstituteHistory::findOrfail($id)->update($data));
        InstituteHistory::find($id)->update([
            'status' => true
        ]);
        InstituteHistory::whereNotIn('id', [$id])->update([
            'status' => false
        ]);
        return redirect()->to('/institute-history');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $history = InstituteHistory::find($id);
        if (is_null($history)) {
            return redirect('/institute-history')->with('message', 'Data not found');
        }
        $history->delete();
        return redirect('/institute-history')->with('message', 'Institute History deleted successfully');

    }
}
