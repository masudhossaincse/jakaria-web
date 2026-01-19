<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\ImportantLink;
use App\Models\Admin\Institute;
use App\Models\Admin\InternalService;
use App\Models\Admin\Notice;
use App\Models\Frontend\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact_form()
    {
        $notice = Notice::where('status', 1)->orderBy('id', 'desc')->get();
        $institute = Institute::where('status', 1)->first();
        $service = InternalService::where('status', 1)->orderBy('id', 'asc')->paginate(6);
        $link = ImportantLink::where('status', 1)->orderBy('id', 'asc')->paginate(7);
        return view('f-includes.pages.contact.contact-form', [
            'institute' => $institute,
            'notices' => $notice,
            'service' => $service,
            'link' => $link,
        ]);
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'nullable',
            'mobile' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);
        $data = request(['name', 'email', 'mobile', 'title', 'description']);
        ContactUs::create($data);

        return redirect()->to('/contact');
    }

    public function contact_list()
    {
        $lists = ContactUs::orderBy('id', 'desc')->paginate(10);
        return view('a-includes.contact.list', ['lists' => $lists]);
    }
}
