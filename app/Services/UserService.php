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
    }

    public function create(Request $request)
    {

        $user = new User();
        $data = [
        'name'                 => $request->name,
        'email'                => $request->email,
        'password'             => bcrypt($request->password),
        'gender'               => $request->gender,
        'rules'                => $request->rules,
        'identification_code'  => $request->identification_code,
        'avatar'               => $request->avatar,
        ];
        $user -> fill($data);
        if ($request->hasFile('identification')) {

            $path = $this->uploadFile->uploadIdentification($request);

            $user->identification = request()->identification->move('images/user', $path);
        }
        if ($request->hasFile('identification_back')) {


            $path = $this->uploadFile->uploadIdentification_back($request);

            $user->identification_back = request()->identification_back->move('images/user', $path);
        }
        $user->save();
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
