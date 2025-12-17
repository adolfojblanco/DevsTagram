<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate;

class PostController extends Controller
{
    public function boot(): void
    {
        Authenticate::redirectUsing(function ($request) {
            return route('login');
        });
    }

    public function index(User $user)
    {
        return View('dashboard');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        return view('posts.create');
    }
}
