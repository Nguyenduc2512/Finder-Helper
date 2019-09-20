<?php

namespace App\Services;
use App\Http\Requests\ChangePasswordRequests;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequests;
use App\Services\UploadService;
use App\Http\Requests\LostPasswordRequest;
use Illuminate\Support\Facades\DB;

class UserService
{

    protected $uploadFile;

    public function __construct(UploadService $uploadFile)
    {
        $this->uploadFile = $uploadFile;
    }

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

            $path = $this->uploadFile->uploadFile($request);

            $user->avatar = request()->avatar->move('images/avatar', $path);
        }

        $user->save();

        return $user;
    }

    public function getUsers()
    {
        $users = User::all();

        return $users;
    }
    public function countUser()
    {
        $user = DB::table('users')->count();

        return $user;
    }
}
