<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ManagerRequest extends FormRequest
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
            'name' => 'required|string|min:5',
            'seat' => 'required',
            'price' => 'required|string|min:5|numeric',
            'model' => 'required',
            'cate_id' => 'required',
            'city_id' => 'required',
            'address' => 'min:5',
            'image' => 'required',
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'Yêu cầu nhập tên cho Xe',
            'name.min' => 'Tên quá ngắn',
            'seat.required' => 'thiếu chỗ của xe',
            'price.required' => 'Yêu cập nhập giá xe',
            'price.numeric' => 'phải là số',
            'model.requied' => 'chon model xe',
            'cate_id.required' => 'Bạn chưa chọn danh mục xe',
            'city_id.required' => 'Bạn chưa chọn thành phố',
            'address.min' => 'Địa chỉ ít quá',
            'image.required' => 'Bạn chưa chọn Ảnh đại diện',
        ];
    }
}
