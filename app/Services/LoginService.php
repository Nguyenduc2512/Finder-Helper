<?php 
 
namespace App\Services;
use App\Models\User;
use Illuminate\Http\Request;

class LoginService
{
    public function createUser($userInfo, $provider)
    {
        $user = User::where('provider_id', $userInfo->id)->first();

        if (!$user) {
            $user = User::create([
                'name'     => $userInfo->name,
                'email'    => $userInfo->email,
                'password' => bcrypt(rand()),
                'provider' => $provider,
                'provider_id' => $userInfo->id
            ]);
        }

        return $user;
    }

    public function createInfo(Request $request)
    {
        $data = $request->except('_token', 'id');
        $user = User::find($request->id);
        $user->update($data);

        return $user;
    }
    
}
