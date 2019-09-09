<?php 

namespace App\Services;
use App\Http\Requests\ChangePasswordRequests;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ChangePasswordService
{
    
    public function savePassword(ChangePasswordRequests $request)
    {
        $data = $request->except('_token', 'id');
        $user = User::find($request->id);

        if ( password_verify($request->password, $user->password) == false) {
            return redirect()->route('user.change-password')->with('errmsg', 'Mật khẩu cũ không chính xác');
        }

        $user->update(
            [
                'password' => bcrypt($request->newpassword),
            ]
        );

        return redirect()->route('user.change-password')->with('errmsg', 'Đổi mật khẩu thành công');
    }

}