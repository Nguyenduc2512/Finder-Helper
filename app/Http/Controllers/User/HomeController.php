<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

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
    
    public function profileFinder()
    {
        return view('userFinder.profile');
    }

    public function profileHelper()
    {
        return view('userHelper.profile');
    }
    
    public function updateInfo(User $user)
    {
        return view('loginUser.update-info');
    }
}
