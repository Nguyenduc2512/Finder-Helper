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
            'end_time'   => 'required|after_or_equal:start_time',
            'amount'     => 'required',
            'gender'     => 'required',
            'address'    => 'required',
            'price'      => 'required|integer|min:0',
            'detail'     => 'required',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Tiêu đề không được để trống',
            'start_time.required' => 'Ngày bắt đầu không được để trống',
            'end_time.required' => 'Ngày bắt đầu không được để trống',
            'end_time.date' => 'Ngày kết thúc không thể trước ngày bắt đầu',
            'amount.required' => 'Số lượng không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'price.required' => 'Tiền lương không được để trống',
            'price.min' => 'Tiền lương không thể là số âm',
            'price.integer' => 'Tiền lương phải là số',
            'detail.required' => 'Mô tả không được để trống',
        ];
    }


}
