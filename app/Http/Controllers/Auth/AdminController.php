<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAdmin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        return view('loginAdmin.login');
    }

    public function postAdmin(LoginAdmin $request)
    {
        $data = [
            'email' => $request['email'], 
            'password' => $request['password'],
        ];

        if ( Auth::guard('admin')->attempt($data) ) {
            
            return redirect()->route('admin');
        } 

        return redirect()->route('loginAdmin')->with('errmsg', 'Email hoặc Password sai');
    }

    public function logoutAdmin()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('loginAdmin');
    }

}
