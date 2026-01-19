<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\HomepageCounter;
use App\Models\Admin\HomeSlider;
use App\Models\Admin\ImportantLink;
use App\Models\Admin\Institute;
use App\Models\Admin\InstituteHeadSpeech;
use App\Models\Admin\InstituteHistory;
use App\Models\Admin\InternalService;
use App\Models\Admin\Notice;
use App\Models\Admin\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $institute = Institute::where('status', 1)->first();
        $slider = HomeSlider::orderBy('id', 'desc')->get();
        $history = InstituteHistory::where('status', 1)->first();
//        $history = str_limit(strip_tags($history->description),100,'...');
        $head_speech = InstituteHeadSpeech::where('status', 1)->first();
        $notice = Notice::where('status', 1)->orderBy('id', 'desc')->get();
        $teacher = Teacher::where('status', 1)->orderBy('serial', 'asc')->paginate(4);
        $link = ImportantLink::where('status', 1)->orderBy('id', 'asc')->paginate(7);
        $service = InternalService::where('status', 1)->orderBy('id', 'asc')->paginate(6);
        $counter = HomepageCounter::where('status', 1)->first();
        return view('f-includes.pages.home', [
            'institute' => $institute,
            'slider' => $slider,
            'history' => $history,
            'head_speech' => $head_speech,
            'notices' => $notice,
            'teacher' => $teacher,
            'link' => $link,
            'service' => $service,
            'counter' => $counter,
        ]);
    }

    public function single_notice(string $id)
    {
        $single_notice = Notice::find($id);
        $notice = Notice::where('status', 1)->orderBy('id', 'desc')->get();
        $institute = Institute::where('status', 1)->first();
        return view('f-includes.pages.notice-single', [
            'institute' => $institute,
            'notices' => $notice,
            'single_notice' => $single_notice
        ]);
    }

    public function all_notice()
    {
        $all_notice = Notice::orderBy('id', 'desc')->paginate(15);
        $notice = Notice::where('status', 1)->orderBy('id', 'desc')->get();
        $institute = Institute::where('status', 1)->first();
        return view('f-includes.pages.notice-all', [
            'institute' => $institute,
            'notices' => $notice,
            'all_notice' => $all_notice
        ]);
    }

    public function under_construction()
    {
        $notice = Notice::where('status', 1)->orderBy('id', 'desc')->get();
        $institute = Institute::where('status', 1)->first();
        return view('under-construction', [
            'institute' => $institute,
            'notices' => $notice,
        ]);
    }
}
