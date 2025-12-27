<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
        $posts = Post::where('user_id', $user->id)->get();
        return View('dashboard', [
            'user' => $user,
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        // Post::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'image' => $request->image,
        //     'user_id' => auth()->user()->id,
        // ]);

        $request->user()->posts()->create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('posts.index', Str::of(auth()->user()->name)->slug('-'));
    }
}
