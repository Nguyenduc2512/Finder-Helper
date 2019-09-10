<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewPostRequest extends FormRequest
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
            'title'      => 'required|max:100',
            'start_time' => 'required',
            'end_time'   => 'required',
            'amount'     => 'required',
            'gender'     => 'required',
            'address'    => 'required',
            'price'      => 'required',
            'detail'     => 'required',
        ];
    }
}
