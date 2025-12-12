<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return View('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate(  [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with(['mensaje', 'Credeciales incorrectas']);
        }
        return redirect()->route('posts.index');
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('login');
    }
}
