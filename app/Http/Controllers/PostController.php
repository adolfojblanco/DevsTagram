<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate;



class PostController extends Controller
{

    public function index()
    {
        return View('dashboard');
    }
}
