<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\InstituteCommittee;
use Illuminate\Http\Request;

class InstituteCommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = InstituteCommittee::orderBy('id', 'desc')->paginate(10);
        return view('a-includes.institute-committee.list', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('a-includes.institute-committee.create');
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

        $inst = InstituteCommittee::create($data);
        InstituteCommittee::whereNotIn('id', [$inst->id])->update([
            'status' => false
        ]);
        return redirect()->to('/institute-committee')->with('Institute Committee created successfully');
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
        $inst_com = InstituteCommittee::find($id);
        return view('a-includes.institute-committee.edit', [ 'inst_com' => $inst_com ]);
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
        tap(InstituteCommittee::findOrfail($id)->update($data));
        InstituteCommittee::find($id)->update([
            'status' => true
        ]);
        InstituteCommittee::whereNotIn('id', [$id])->update([
            'status' => false
        ]);
        return redirect()->to('/institute-committee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inst_com = InstituteCommittee::find($id);
        if (is_null($inst_com)) {
            return redirect('/institute-committee')->with('message', 'Data not found');
        }
        $inst_com->delete();
        return redirect('/institute-committee')->with('message', 'Institute Committee deleted successfully');
    }
}
