<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Admin\Institute;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login_form()
    {
        $institute = Institute::where('status', 1)->first();
        return view('a-includes.login', [
            'institute' => $institute
        ]);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        if(!Auth::validate($credentials)):
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect('dashboard');
    }

    public function cpv()
    {
        return view('a-includes.cp');
    }

    public function cp()
    {
        $this->validate(request(), [
            'new_password' => 'required|confirmed'
        ]);

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make(request()->new_password)
        ]);

        return redirect('dashboard')->with("status", "Password changed successfully!");
    }
}
