<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAdminRequests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginAdmin()
    {
         return view('admin.loginAdmin.loginAdmin');
    }
    public function postAdmin(LoginAdminRequests $request)
    {
        if( Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password] )) {
            return view('admin.admin');
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
