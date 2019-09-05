<?php

namespace App\Http\Controllers\Auth;

use App\Models\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUser;
use App\Http\Requests\LoginAdmin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function showLoginForm()
    {

        return view('client/loginform');
    }

    public function login(LoginUser $request)
    {
        if (Auth::attempt(['email'   => $request->email,
                          'password' => $request->password])) {

            return redirect('/');
        }

        return redirect()->route('login')->with('errmsg', 'Email or password is incorrect');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function loginAdmin()
    {
        return view('loginAdmin.login');
    }

    public function postAdmin(LoginAdmin $request)
    {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            return redirect()->route('home');
        };

            return redirect()->route('loginAdmin')->with('errmsg', 'Email hoặc Password sai');
        
        //  $user = $request-> password;
        //  dd($user);
    }
}
