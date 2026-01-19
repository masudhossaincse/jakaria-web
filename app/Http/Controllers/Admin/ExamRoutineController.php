<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ExamRoutine;
use App\Models\Admin\Institute;
use App\Models\Admin\Notice;
use Illuminate\Http\Request;

class ExamRoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = ExamRoutine::orderBy('id', 'desc')->paginate(10);
        return view('a-includes.exam-routine.list', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('a-includes.exam-routine.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'description' => 'nullable'
        ]);

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/routines');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $image->move($destinationPath, $input['imagename']);
            $data['image'] = 'routines/' . $input['imagename'];
        }

        $data['created_by'] = auth()->user()->id;
        $exam = ExamRoutine::create($data);
        ExamRoutine::whereNotIn('id', [$exam->id])->update([
            'status' => false
        ]);

        return redirect()->to('/exam-routine')->with('Exam Routine created successfully');
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
        $routine = ExamRoutine::find($id);
        return view('a-includes.exam-routine.edit', [ 'routine' => $routine ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $routine = ExamRoutine::find($id);
        if (is_null($routine)) {
            return redirect('/exam-routine')->with('message', 'Data not found');
        }

        $data = $request->validate([
            'title' => 'nullable',
            'image' => 'nullable',
            'description' => 'nullable'
        ]);

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/routines');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $image->move($destinationPath, $input['imagename']);
            $data['image'] = 'routines/' . $input['imagename'];
        }
        $data['updated_by'] = auth()->user()->id;

        tap(ExamRoutine::findOrfail($id)->update($data));
        ExamRoutine::find($id)->update([
            'status' => true
        ]);
        ExamRoutine::whereNotIn('id', [$id])->update([
            'status' => false
        ]);

        return redirect()->to('/exam-routine')->with('Exam Routine updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $routine = ExamRoutine::find($id);
        if (is_null($routine)) {
            return redirect('/exam-routine')->with('message', 'Data not found');
        }
        $routine->delete();
        return redirect('/exam-routine')->with('message', 'exam-routine deleted successfully');
    }

    public function exam_routine()
    {
        $notice = Notice::where('status', 1)->orderBy('id', 'desc')->get();
        $institute = Institute::where('status', 1)->first();
        $history = ExamRoutine::where('status', 1)->first();
        return view('f-includes.pages.activities.exam-routine', [
            'institute' => $institute,
            'notices' => $notice,
            'history' => $history
        ]);
    }
}
