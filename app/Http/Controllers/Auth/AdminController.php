<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAdminRequests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logoutAdmin');
    }

    public function loginAdmin()
    {
         return view('admin.loginAdmin.loginAdmin');
    }

    public function guard()
    {
        return Auth::guard('admin');
    }

    public function postAdmin(LoginAdminRequests $request)
    {
        if( Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password] )) {
            return view('admin.admin');
        } else {
            return redirect()->route('loginAdmin')->with('errmsg', 'Email hoặc Password sai');
        }
    }
    public function logoutAdmin(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route( 'loginAdmin' ));
    }
}
