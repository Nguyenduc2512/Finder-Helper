<?php 

namespace App\Services;
use Illuminate\Http\Requests\SignUpRequest;
use Illuminate\Http\Request;
use App\Models\User;

class SignUpService
{
   
    public function create(SignUpRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->rules = $request->rules;
        $user->identification_code = $request->identification_code;
        $user->avatar = $request->avatar;
   
        if( $request->hasFile('identification') )
        {
        // lấy tên gốc của ảnh
         $filename = $request->identification->getClientOriginalName();
         $filename = str_replace(' ', '-', $filename);
         $filename = uniqid() . '-' . $filename;
        $user->identification = request()->identification->move('images/user', $filename);
        // lưu ảnh và trả về đường dẫn
        }

        if( $request->hasFile('identification_back') )
        {
        // lấy tên gốc của ảnh
         $filename = $request->identification_back->getClientOriginalName();
         $filename = str_replace(' ', '-', $filename);
         $filename = uniqid() . '-' . $filename;
        $user->identification_back = request()->identification_back->move('images/user', $filename);
        // lưu ảnh và trả về đường dẫn
        }
    $user->save();
    }
}
