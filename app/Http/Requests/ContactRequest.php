<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'min:4', 'max:40'],
            'email' => ['required', 'email'],
            'phone' => 'required|numeric|digits:10',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Trường Họ và Tên không được bỏ trống.',
            'name.min' => 'Họ và tên nhập vào không được ít hơn 4 ký tự.',
            'name.max' => 'Họ và tên nhập vào không quá 40 ký tự.',

            'email.required' => 'Trường Email không được bỏ trống.',
            'email.email' => 'Trường Email phải là một địa chỉ email hợp lệ.',

            'phone.required' => 'Trường Số Điện Thoại không được bỏ trống.',
            'phone.numeric' => 'Trường Số Điện Thoại phải là một số.',
            'phone.digits' => 'Trường Số Điện Thoại phải 10 số.',

            'content.required'=> 'Trường Nội dung không được bỏ trống.'
        ];
    }


}
