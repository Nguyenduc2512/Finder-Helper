<?php

namespace App\Http\Controllers\User;
use App\Http\Requests\NewPostRequest;
use App\Models\Post;
use App\Models\User;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function profile()
    {
        $gender = Config::get('helper');

        return view('profile', compact('gender'));
    }

    public function category()
    {
        return view('all_job');
    }

    public function profileFinder()
    {
        $gender = Config::get('helper');

        return view('userFinder.profile', compact('gender'));
    }

    public function profileHelper()
    {
        $gender = Config::get('helper');

        return view('userHelper.profile', compact('gender'));
    }

    public function updateInfo(User $user)
    {
        return view('loginUser.update_info');
    }

    public function changePassword()
    {
        return view('client.change_password');
    }

    public function editProfile()
    {
        $gender = Config::get('helper');
       
        return view('client.edit_profile', compact('gender'));
    }
}
