<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoinRequest extends FormRequest
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
            'bank' => 'required',
            'money' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'bank.required' => 'Nhập STK ngân hàng',
            'money.required' => 'Nhập số tiền nạp',
            'image.required' => 'Tải hóa đơn ảnh',
            'image.mimes' => 'Định dạng ảnh jpeg, png, gif, svg',
            'image.max' => 'Ảnh tối đa 2048Kb'
        ];
    }
}
