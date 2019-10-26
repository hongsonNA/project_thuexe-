<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserAdminRequest extends FormRequest
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
            'name' => 'required|min:6|max:40',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($this->id)
            ],
//            'email' => 'required|email|unique:users',
            'identity_card' => 'required|min:9|max:12|integer',
            'phone' => 'required|numeric|phone_number|size:11',
            'address' => 'required|max:60',
            'password' => 'required|min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập vào Form.',
            'name.min' => 'Tên tài khoản không ít hơn 6 ký tự.',
            'name.max' => 'Tên tài khoản tối đa 40 ký tự.',

            'email.required' => 'Vui lòng nhập vào Form.',
            'email.email' => 'Email phải là một địa chỉ email hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',

            'identity_card.required' => 'Vui lòng nhập vào Form.',
            'identity_card.min' => 'Trường CMND không ít hơn 9 ký tự.',
            'identity_card.max' => 'Trường CMND không quá 12 ký tự.',
            'identity_card.integer' => 'Chứng minh nhân dân/Thẻ căn cước phải là số.',

            'phone.required' => 'Vui lòng nhập vào Form.',
            'address.required' => 'Vui lòng nhập vào Form.',
            'address.max' => 'Trường đỉa chỉ tối đa 60 ký tự.',
            'password.required' => 'Vui lòng nhập vào Form.',



        ];
    }
}
