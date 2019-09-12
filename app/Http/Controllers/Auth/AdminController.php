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
         return view('admin.loginAdmin.login');
    }

    public function postAdmin(LoginAdmin $request)
    {

        if( Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password] )) {

            return redirect()->route('admin');
        } else {

            return redirect()->route('loginAdmin')->with('errmsg', 'Email hoặc Password sai');
        }
    }

    public function logoutAdmin()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('loginAdmin');
    }
}
