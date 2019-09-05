<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function profile()
    {
        return view('profile');
    }

    public function category()
    {
        return view('all-job');
    }
}
