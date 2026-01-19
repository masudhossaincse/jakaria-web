<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view("a-includes.register");
    }

    public function store()
    {
        $user = User::get();
        if ($user->count()) {
            return redirect('/login')->with('Permission needed');
        }

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = request(['name', 'email']);
        $data['password'] = Hash::make(request('password'));
        $user = User::create($data);

        auth()->login($user);

        return redirect()->to('/dashboard');
    }
}
