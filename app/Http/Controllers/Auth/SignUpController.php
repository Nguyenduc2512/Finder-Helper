<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SignUpController extends Controller
{
    public function show()
    {
        return view('client.loginUser.sign-up');
    }

    protected function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|min:4',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8',
            'pwd' => 'required|same:password',
            'identification_code'=>'required'
        ],[
            'name.required' => "không được để trống",
            'name.max' => "quá dài vui lòng viết ngắn lại",
            'name.min'=> " quá ngắn vui lòng nhập thêm",
            'eamil.required' => "không được để trống",
            'eamil.email' => "không đúng định dạng",
            'eamil.unique' => "email đã tồn tại",
            'password.required' => "không được để trống",
            'password.min' => "không được nhỏ hơn 8 ký tự",
            'pwd.same' => "không khớp, vui lòng nhập lại",
            'pwd.required' => "không được để trống",
            'identification_code.required' => "không được để trống"
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->rules = $request->rules;
        $user->identification_code = $request->identification_code;
        $user->avatar = $request->avatar;
        if($request->hasFile('identification')){
            // lấy tên gốc của ảnh
             $filename = $request->identification->getClientOriginalName();
             $filename = str_replace(' ', '-', $filename);
             $filename = uniqid() . '-' . $filename;
            $user->identification = request()->identification->move('images/user', $filename);
            // lưu ảnh và trả về đường dẫn
        }
        if($request->hasFile('identification_back')){
            // lấy tên gốc của ảnh
             $filename = $request->identification_back->getClientOriginalName();
             $filename = str_replace(' ', '-', $filename);
             $filename = uniqid() . '-' . $filename;
            $user->identification_back = request()->identification_back->move('images/user', $filename);
            // lưu ảnh và trả về đường dẫn
        }
        $user->save();
         return redirect()->route('login');
    }
}