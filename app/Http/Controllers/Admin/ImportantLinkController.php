<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ImportantLink;
use Illuminate\Http\Request;

class ImportantLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = ImportantLink::orderBy('id', 'desc')->paginate(10);
        return view('a-includes.important-link.list', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('a-includes.important-link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'link' => 'required'
        ]);
        $data = request(['title', 'link']);
        $data['created_by'] = auth()->user()->id;

        ImportantLink::create($data);
        return redirect()->to('/important-link');
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
        $link = ImportantLink::find($id);
        return view('a-includes.important-link.edit', ['link' => $link]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'title' => 'required',
            'link' => 'required'
        ]);
        $data = request(['title', 'link']);
        tap(ImportantLink::findOrfail($id)->update($data));

        return redirect()->to('/important-link');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $link = ImportantLink::find($id);
        if (is_null($link)) {
            return redirect('/important-link')->with('message', 'Data not found');
        }
        $link->delete();
        return redirect('/important-link')->with('message', 'Important link deleted successfully');

    }
}
