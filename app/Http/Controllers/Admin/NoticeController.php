<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = Notice::orderBy('id', 'desc')->paginate(10);
        return view('a-includes.notice.list', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('a-includes.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     * 'request_date' => 'required|date_format:Y-m-d H:i:s|after:5 hours'
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
            'published_date' => 'required|date_format:Y-m-d',
            'attachment' => 'nullable'
        ]);

        $data = request(['title', 'description', 'published_date']);
        $data['created_by'] = auth()->user()->id;

        if (request()->hasFile('attachment')) {
            $image = request()->file('attachment');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/notices');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $image->move($destinationPath, $input['imagename']);
            $data['attachment'] = 'notices/' . $input['imagename'];
        }
        Notice::create($data);

        return redirect()->to('/notice')->with('Notice created successfully');

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
        $notice = Notice::find($id);
        return view('a-includes.notice.edit', [ 'notice' => $notice ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'title' => 'nullable',
            'description' => 'required',
            'published_date' => 'required|date_format:Y-m-d',
            'attachment' => 'nullable',
            'status' => 'required|boolean'
        ]);
        $data = request(['title', 'description', 'status', 'published_date']);
        $data['updated_by'] = auth()->user()->id;

        if (request()->hasFile('attachment')) {
            $image = request()->file('attachment');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/notices');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $image->move($destinationPath, $input['imagename']);
            $data['attachment'] = 'notices/' . $input['imagename'];
        }
        tap(Notice::findOrfail($id)->update($data));

        return redirect()->to('/notice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notice = Notice::find($id);
        if (is_null($notice)) {
            return redirect('/notice')->with('message', 'Data not found');
        }
        $notice->delete();
        return redirect('/notice')->with('message', 'Notice deleted successfully');

    }
}
