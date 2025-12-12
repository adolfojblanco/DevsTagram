<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate;

class PostController extends Controller
{

    public function index()
    {
        return View('dashboard');
    }
}
