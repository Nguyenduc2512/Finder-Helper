<?php

namespace App\Http\Controllers\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function profile()
    {
        $gender = Config::get('helper');

        return view('client.profile', compact('gender'));
    }

    public function category()
    {
        return view('client.all_job');
    }

    public function profileFinder()
    {
        $gender = Config::get('helper');

        return view('client.userFinder.profile', compact('gender'));
    }

    public function profileHelper()
    {
        $gender = Config::get('helper');

        return view('client.userHelper.profile', compact('gender'));
    }

    public function updateInfo(User $user)
    {
        return view('client.loginUser.update_info');
    }

    public function changePassword()
    {
        return view('client.formClient.change_password');
    }

    public function editProfile()
    {
        $gender = Config::get('helper');
       
        return view('client.formClient.edit_profile', compact('gender'));
    }
}
