<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\HomepageCounter;
use Illuminate\Http\Request;

class HomepageCounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = HomepageCounter::orderBy('id', 'desc')->paginate(10);
        return view('a-includes.homepage-counter.list', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('a-includes.homepage-counter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'students' => 'required',
            'teachers' => 'required',
            'staff' => 'required',
            'educational_level' => 'required'
        ]);
        $data = request(['students', 'teachers', 'staff', 'educational_level']);
        $data['created_by'] = auth()->user()->id;

        $inst = HomepageCounter::create($data);
        HomepageCounter::whereNotIn('id', [$inst->id])->update([
            'status' => false
        ]);
        return redirect()->to('/homepage-counter');
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
        $counter = HomepageCounter::find($id);
        return view('a-includes.homepage-counter.edit', ['counter' => $counter]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'students' => 'required',
            'teachers' => 'required',
            'staff' => 'required',
            'educational_level' => 'required'
        ]);
        $data = request(['students', 'teachers', 'staff', 'educational_level']);
        tap(HomepageCounter::findOrfail($id)->update($data));
        HomepageCounter::find($id)->update([
            'status' => true
        ]);
        HomepageCounter::whereNotIn('id', [$id])->update([
            'status' => false
        ]);
        return redirect()->to('/homepage-counter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $counter = HomepageCounter::find($id);
        if (is_null($counter)) {
            return redirect('/homepage-counter')->with('message', 'Data not found');
        }
        $counter->delete();
        return redirect('/homepage-counter')->with('message', 'Homepage counter deleted successfully');

    }
}
