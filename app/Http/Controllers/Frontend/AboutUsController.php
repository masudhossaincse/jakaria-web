<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Institute;
use App\Models\Admin\InstituteCommittee;
use App\Models\Admin\InstituteHeadSpeech;
use App\Models\Admin\InstituteHistory;
use App\Models\Admin\InstituteTreasure;
use App\Models\Admin\Notice;
use App\Models\Admin\Teacher;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function institute_history()
    {
        $notice = Notice::where('status', 1)->orderBy('id', 'desc')->get();
        $institute = Institute::where('status', 1)->first();
        $history = InstituteHistory::where('status', 1)->first();
        return view('f-includes.pages.about-us.institute-history', [
            'institute' => $institute,
            'notices' => $notice,
            'history' => $history
        ]);
    }

    public function head_speech_institute()
    {
        $notice = Notice::where('status', 1)->orderBy('id', 'desc')->get();
        $institute = Institute::where('status', 1)->first();
        $speech = InstituteHeadSpeech::where('status', 1)->first();
        return view('f-includes.pages.about-us.institute-head-speech', [
            'institute' => $institute,
            'notices' => $notice,
            'speech' => $speech
        ]);
    }
    public function committee_institute()
    {
        $notice = Notice::where('status', 1)->orderBy('id', 'desc')->get();
        $institute = Institute::where('status', 1)->first();
        $comm_institute = InstituteCommittee::where('status', 1)->first();
        return view('f-includes.pages.about-us.institute-committee', [
            'institute' => $institute,
            'notices' => $notice,
            'comm_institute' => $comm_institute
        ]);
    }
    public function treasure_institute()
    {
        $notice = Notice::where('status', 1)->orderBy('id', 'desc')->get();
        $institute = Institute::where('status', 1)->first();
        $tr_institute = InstituteTreasure::where('status', 1)->first();
        return view('f-includes.pages.about-us.institute-treasure', [
            'institute' => $institute,
            'notices' => $notice,
            'tr_institute' => $tr_institute
        ]);
    }

    public function institute_staff()
    {
        $notice = Notice::where('status', 1)->orderBy('id', 'desc')->get();
        $institute = Institute::where('status', 1)->first();
        $staff = Teacher::where('status', 1)->orderBy('serial', 'asc')->get();
        return view('f-includes.pages.about-us.institute-staff', [
            'institute' => $institute,
            'notices' => $notice,
            'staff' => $staff
        ]);
    }
}
