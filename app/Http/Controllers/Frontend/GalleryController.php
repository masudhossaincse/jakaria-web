<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery;
use App\Models\Admin\Institute;
use App\Models\Admin\Notice;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery()
    {
        $notice = Notice::where('status', 1)->orderBy('id', 'desc')->get();
        $institute = Institute::where('status', 1)->first();
        $gallery = Gallery::where('status', 1)->orderBy('id', 'desc')->get();
        return view('f-includes.pages.gallery', [
            'institute' => $institute,
            'notices' => $notice,
            'galleries' => $gallery
        ]);
    }
}
