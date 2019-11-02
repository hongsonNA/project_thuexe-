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
            'name' => 'required|min:4|max:40',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($this->id)
            ],
            'identity_card' => 'required|numeric|min:9',
            'phone' => 'required|numeric|digits:10',
            'address' => 'required|max:60',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
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
            'email.unique' => 'Trường Email đã tồn tại.',

            'identity_card.required' => 'Trường CMND không được bỏ trống.',
            'identity_card.numeric' => 'Chứng minh nhân dân/Thẻ căn cước phải là số.',
            'identity_card.min' => 'Trường CMND không ít hơn 9 ký tự.',

            'phone.required' => 'Trường Số Điện Thoại không được bỏ trống.',
            'phone.numeric' => 'Trường Số Điện Thoại phải là một số.',
            'phone.digits' => 'Trường Số Điện Thoại phải 10 số.',

            'address.required' => 'Trường Địa Chỉ không được bỏ trống.',
            'address.max' => 'Trường Đỉa Chỉ tối đa 60 ký tự được nhập vào.',

            'password.required' => 'Trường Mật Khẩu không được bỏ trống.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.confirmed' => 'Trường Mật Khẩu và Xác Nhận Mật Khẩu phải phù hợp.',

            'password_confirmation.required' => 'Trường Xác Nhận Mật Khẩu không được bỏ trống.',
            'password_confirmation.min' => 'Trường Xác Nhận Mật Khẩu phải có ít nhất 8 ký tự.',

            'image.mimes' => 'Hình ảnh chỉ chứa các đuôi: jpeg, jpg, png, gif.',
            'images.max' => 'Kích thước tối đa được phép cho một hình ảnh là 1MB',

        ];
    }
}
