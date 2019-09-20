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
            'identification_code'=>'required',
            'identification'=>'required',
            'identification_back'=>'required',
            'gender'=>'required',
            'rules'=>'required',
            'rememberme'=>'required',
        ];
    }
}

