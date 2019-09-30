<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInfoRequest extends FormRequest
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
