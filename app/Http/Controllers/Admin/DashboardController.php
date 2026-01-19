<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Institute;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $institute = Institute::where('status', 1)->first();
        return view('a-includes.dashboard', [ 'institute' => $institute ]);
    }
}
