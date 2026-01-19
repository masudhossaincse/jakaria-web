<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\InstituteTreasure;
use Illuminate\Http\Request;

class InstituteTreasureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = InstituteTreasure::orderBy('id', 'desc')->paginate(10);
        return view('a-includes.institute-treasure.list', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('a-includes.institute-treasure.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'nullable',
            'description' => 'required'
        ]);
        $data = request(['title', 'description']);
        $data['created_by'] = auth()->user()->id;

        $inst = InstituteTreasure::create($data);
        InstituteTreasure::whereNotIn('id', [$inst->id])->update([
            'status' => false
        ]);
        return redirect()->to('/institute-treasure')->with('Institute treasure created successfully');
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
        $inst_tre = InstituteTreasure::find($id);
        return view('a-includes.institute-treasure.edit', [ 'inst_tre' => $inst_tre ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'title' => 'nullable',
            'description' => 'required'
        ]);
        $data = request(['title', 'description']);
        $data['updated_by'] = auth()->user()->id;
        tap(InstituteTreasure::findOrfail($id)->update($data));
        InstituteTreasure::find($id)->update([
            'status' => true
        ]);
        InstituteTreasure::whereNotIn('id', [$id])->update([
            'status' => false
        ]);
        return redirect()->to('/institute-treasure');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inst_tre = InstituteTreasure::find($id);
        if (is_null($inst_tre)) {
            return redirect('/institute-treasure')->with('message', 'Data not found');
        }
        $inst_tre->delete();
        return redirect('/institute-treasure')->with('message', 'Institute treasure deleted successfully');
    }
}
