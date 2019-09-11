<?php 

namespace App\Services;
use App\Http\Requests\ChangePasswordRequests;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequests;

class UserService
{
    
    public function savePassword(ChangePasswordRequests $request)
    {
        $data = $request->except('_token', 'id');
        $user = User::find($request->id);

        if ( password_verify($request->password, $user->password) == false) {
            return redirect()->route('user.change-password')->with('errmsg', 'Old password is incorrect');
        }

        $user->update(
            [
                'password' => bcrypt($request->newpassword),
            ]
        );

        return redirect()->route('user.change-password')->with('errmsg', 'Change password successfully');
    }

    public function updateProfile(UserRequests $request)
    {
        $user = User::find($request->id);
        $user->fill($request->all());

        if ($request->hasFile('avatar')) {

            $filename = $request->avatar->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $filename = uniqid() . '-' . $filename;
            $path = request()->avatar->move(('images/avatar'), $filename);

            $user->avatar= $path;
        }

        $user->save();
        
        return $user;
    }

}