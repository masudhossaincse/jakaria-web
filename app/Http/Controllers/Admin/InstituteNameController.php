<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Institute;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InstituteNameController extends Controller
{
    public function list()
    {
        $lists = Institute::orderBy('id', 'desc')->get();
        return view('a-includes.institute.list', [
            'lists' => $lists
        ]);
    }

    public function create()
    {
        $institute = Institute::where('status', 1)->first();
        return view('a-includes.institute.create', [ 'institute' => $institute ]);
    }

    public function store()
    {
        $this->validate(request(), [
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'name_en' => 'required',
            'name_bn' => 'required',
            'eiin' => 'required',
            'email' => 'required',
            'address' => 'nullable',
            'contact' => 'required',
            'facebook' => 'nullable',
            'youtube' => 'nullable'
        ]);
        $data = request(['name_en', 'name_bn', 'eiin', 'email', 'address', 'contact', 'facebook', 'youtube']);
        $data['created_by'] = auth()->user()->id;

        if (request()->hasFile('logo')) {
            $image = request()->file('logo');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $img = Image::make($image->getRealPath());
            $img->resize(250, 250)->save($destinationPath . '/' . $input['imagename']);
            $destinationPath = public_path('/images/resize');
            $image->move($destinationPath, $input['imagename']);
            $data['logo'] = 'images/' . $input['imagename'];
        }

        $inst = Institute::create($data);
        Institute::whereNotIn('id', [$inst->id])->update([
            'status' => false
        ]);
        return redirect()->to('/institute');
    }

    public function edit($id)
    {
        $institute = Institute::find($id);
        return view('a-includes.institute.edit', [ 'institute' => $institute]);
    }

    public function update($id)
    {
        $this->validate(request(), [
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'name_en' => 'required',
            'name_bn' => 'required',
            'eiin' => 'required',
            'email' => 'required',
            'address' => 'nullable',
            'contact' => 'required',
            'facebook' => 'nullable',
            'youtube' => 'nullable'
        ]);

        $data = request(['name_en', 'name_bn', 'eiin', 'email', 'address', 'contact', 'facebook', 'youtube']);
        $data['updated_by'] = auth()->user()->id;
        if (request()->hasFile('logo')) {
            $image = request()->file('logo');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $img = Image::make($image->getRealPath());
            $img->resize(250, 250)->save($destinationPath . '/' . $input['imagename']);
            $destinationPath = public_path('/images/resize');
            $image->move($destinationPath, $input['imagename']);
            $data['logo'] = 'images/' . $input['imagename'];
        }

        tap(Institute::findOrfail($id)->update($data));
        Institute::find($id)->update([
            'status' => true
        ]);
        Institute::whereNotIn('id', [$id])->update([
            'status' => false
        ]);
        return redirect()->to('/institute');
    }

    public function destroy(string $id)
    {
        $institute = Institute::find($id);
        if (is_null($institute)) {
            return redirect('/institute')->with('message', 'Data not found');
        }
        $institute->delete();
        return redirect('/institute')->with('message', 'Institute deleted successfully');

    }
}
