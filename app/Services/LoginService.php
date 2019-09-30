<?php

namespace App\Services;
use App\Models\User;
use App\Services\UploadService;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateInfoRequest;

class LoginService
{
    protected $uploadFile;

    public function __construct(UploadService $uploadFile)
    {
        $this->uploadFile = $uploadFile;
    }

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

    public function createInfo(UpdateInfoRequest $request)
    {
        $user = User::find($request->id);
        $user->fill($request->all());

        if ( $request->hasFile('identification_back') ) {

            $path = $this->uploadFile->uploadIdentification_back($request);

            $user->identification_back = request()->identification_back->move('images/user', $path);
        }

        if ( $request->hasFile('identification') ) {

            $path = $this->uploadFile->uploadIdentification($request);

            $user->identification = request()->identification->move('images/user', $path);
        }

        $user->save();
    }

}
