<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|min:4',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6',
            'pwd' => 'required|same:password',
            'identification_code'=>'required|integer|min:11',
            'identification'=>'required|file|mimes:jpeg,png,jpg',
            'identification_back'=>'required|file|mimes:jpeg,png,jpg',
            'gender'=>'required',
            'rules'=>'required',
            'rememberme'=>'required',
        ];
    }

    public function messages(){
        return [
            'name.required'                 => 'Nhập tên của bạn !',
            'email.required'                => 'Email của bạn không được trống',
            'email.unique'                  => 'Email đã được sử dụng',
            'password.required'             => 'Mật khẩu phải có 6 kí tự',
            'password.min'                  => 'Mật khẩu phải có 6 kí tự',
            'pwd.same'                      => 'Mật khẩu không khớp',
            'pwd.required'                  => 'Không được để trống',
            'identification_code.required'  => 'Không được để trống',
            'identification_code.min'       => 'Số CMT/CCCD không đúng',
            'identification.required'       => 'Không được để trống',
            'identification.mimes'          => 'Hãy sử dụng file JPEG/PNG/JPG',
            'identification_back.required'  => 'Không được để trống',
            'identification_back.mimes'     => 'Hãy sử dụng file JPEG/PNG/JPG',
            'gender.required'               => 'Giới tính không được để trống',
            'rememberme.required'           => 'Đồng ý với điều khoản của chúng tôi',
            'rules.required'                => 'Bạn vui lòng chọn quyền',
        ];
    }
}

