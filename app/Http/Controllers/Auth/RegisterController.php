<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class RegisterController extends Controller
{


    public function index()
    {
        return View('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:4', 'max:30'],
            'email' => ['required', 'unique:users', 'email', 'max:40'],
            'password' => ['required', 'min:8']
        ]);

        User::create([
            'name' => Str::title($request->name),
            'email' => Str::lower($request->email),
            'password' => $request->password
        ]);

        auth()->attempt([
            'email'=> $request->email,
            'password'=> $request->password
        ]);
        return redirect()->route('posts.index', Str::of(auth()->user()->name)->slug('-'));
    }
}
