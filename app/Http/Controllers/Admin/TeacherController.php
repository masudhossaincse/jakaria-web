<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Teacher;
use App\Models\Admin\TeacherImport;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = Teacher::orderBy('serial', 'asc')->paginate(10);
        return view('a-includes.teacher.list', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('a-includes.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'serial' => 'required',
            'name' => 'required',
            'contact' => 'required',
            'mpo_code' => 'nullable',
            'gender' => 'required',
            'designation' => 'required',
            'date_of_joining' => 'required|date_format:Y-m-d',
            'date_of_mpo' => 'required|date_format:Y-m-d',
            'date_of_birth' => 'required|date_format:Y-m-d',
            'ssc' => 'nullable',
            'hsc' => 'nullable',
            'ba' => 'nullable',
            'honours' => 'nullable',
            'masters' => 'nullable',
            'b_ed' => 'nullable',
            'm_ed' => 'nullable',
            'm_phil' => 'nullable',
            'phd' => 'nullable',
        ]);
        $data = request(['serial', 'name', 'contact', 'mpo_code', 'gender', 'designation',
            'date_of_joining', 'date_of_mpo', 'date_of_birth', 'ssc', 'hsc', 'ba', 'honours',
            'masters', 'b_ed', 'm_ed', 'm_phil', 'phd'
        ]);
        $data['created_by'] = auth()->user()->id;

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/teacher');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $img = Image::make($image->getRealPath());
            $img->resize(260, 265)->save($destinationPath . '/' . $input['imagename']);
            $destinationPath = public_path('/images/resize/teacher');
            $image->move($destinationPath, $input['imagename']);
            $data['image'] = 'images/teacher/' . $input['imagename'];
        }

        Teacher::create($data);

        return redirect()->to('/teacher')->with('Teacher Created Successfully');
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
        $teacher = Teacher::find($id);
        return view('a-includes.teacher.edit', [ 'teacher' => $teacher ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'serial' => 'required',
            'name' => 'required',
            'contact' => 'required',
            'mpo_code' => 'nullable',
            'gender' => 'required',
            'designation' => 'required',
            'date_of_joining' => 'required|date_format:Y-m-d',
            'date_of_mpo' => 'required|date_format:Y-m-d',
            'date_of_birth' => 'required|date_format:Y-m-d',
            'ssc' => 'nullable',
            'hsc' => 'nullable',
            'ba' => 'nullable',
            'honours' => 'nullable',
            'masters' => 'nullable',
            'b_ed' => 'nullable',
            'm_ed' => 'nullable',
            'm_phil' => 'nullable',
            'status' => 'required|boolean'
        ]);

        $teacher = Teacher::find($id);
        if (is_null($teacher)) {
            return redirect('/teacher')->with('message', 'Data not found');
        }

        $data = request(['serial', 'name', 'contact', 'mpo_code', 'gender', 'designation',
            'date_of_joining', 'date_of_mpo', 'date_of_birth', 'ssc', 'hsc', 'ba', 'honours',
            'masters', 'b_ed', 'm_ed', 'm_phil', 'phd', 'status']);
        $data['updated_by'] = auth()->user()->id;

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/teacher');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $img = Image::make($image->getRealPath());
            $img->resize(260, 265)->save($destinationPath . '/' . $input['imagename']);
            $destinationPath = public_path('/images/resize/teacher');
            $image->move($destinationPath, $input['imagename']);
            $data['image'] = 'images/teacher/' . $input['imagename'];
        }

        tap(Teacher::findOrfail($id)->update($data));

        return redirect()->to('/teacher');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::find($id);
        if (is_null($teacher)) {
            return redirect('/teacher')->with('message', 'Data not found');
        }
        $teacher->delete();
        return redirect('/teacher')->with('message', 'Teacher deleted successfully');

    }

    public function upload_view()
    {
        return view('a-includes.teacher.upload');
    }

    public function upload()
    {
        $this->validate(request(), [
            'teacher_import' => 'required|mimes:xls,xlsx,csv'
        ]);

        $import = new TeacherImport();
        Excel::import($import, request()->file('teacher_import'));

        Validator::make($import->rows->toArray(), [
            '*.serial' => 'required',
            '*.name' => 'required',
            '*.contact' => 'required',
            '*.mpo_code' => 'required',
            '*.gender' => 'required',
            '*.designation' => 'required',
            '*.date_of_joining' => 'required',
            '*.date_of_mpo' => 'required',
            '*.date_of_birth' => 'required',
            '*.ssc' => 'required',
            '*.hsc' => 'required',
            '*.ba' => 'required',
            '*.honours' => 'required',
            '*.masters' => 'required',
            '*.b_ed' => 'required',
            '*.m_ed' => 'required',
            '*.m_phil' => 'required',
            '*.phd' => 'required',
        ]);

        dd($import->rows);

//        $this->validate($import->rows->toArray(), [
//            '*.serial' => 'required',
//            '*.name' => 'required',
//            '*.contact' => 'required',
//            '*.mpo_code' => 'required',
//            '*.gender' => 'required',
//            '*.designation' => 'required',
//            '*.date_of_joining' => 'required',
//            '*.date_of_mpo' => 'required',
//            '*.date_of_birth' => 'required',
//            '*.ssc' => 'required',
//            '*.hsc' => 'required',
//            '*.ba' => 'required',
//            '*.honours' => 'required',
//            '*.masters' => 'required',
//            '*.b_ed' => 'required',
//            '*.m_ed' => 'required',
//            '*.m_phil' => 'required',
//            '*.phd' => 'required',
//        ]);

    }
}
