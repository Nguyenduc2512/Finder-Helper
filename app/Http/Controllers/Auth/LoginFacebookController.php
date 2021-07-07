<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\UpdateInfoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Socialite;
use App\Services\LoginService;
use Illuminate\Support\Facades\Config;

class LoginFacebookController extends Controller
{
    protected $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $userInfo = Socialite::driver($provider)->stateless()->user();
        $user = $this->loginService->createUser($userInfo, $provider);
        Auth::login($user);

        if (Auth::user()->rules) {

            return redirect()->route('user.profile');
        } else {

            return redirect()->route('user.update-info', Auth::user()->id );
        }

    }

    public function addInfo(UpdateInfoRequest $request)
    {
        $this->loginService->createInfo($request);

        return redirect('/');
    }

}
