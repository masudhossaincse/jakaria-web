<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\InternalService;
use Illuminate\Http\Request;

class InternalServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = InternalService::orderBy('id', 'desc')->paginate(10);
        return view('a-includes.internal-service.list', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('a-includes.internal-service.create');
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

        InternalService::create($data);
        return redirect()->to('/internal-service');
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
        $service = InternalService::find($id);
        return view('a-includes.internal-service.edit', ['service' => $service]);
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
        tap(InternalService::findOrfail($id)->update($data));

        return redirect()->to('/internal-service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = InternalService::find($id);
        if (is_null($service)) {
            return redirect('/internal-service')->with('message', 'Data not found');
        }
        $service->delete();
        return redirect('/internal-service')->with('message', 'Internal service deleted successfully');

    }
}
