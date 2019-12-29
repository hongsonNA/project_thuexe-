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
            'model_id' => 'required',
            'license_plate' => 'required|min:4|max:10',
            'gear' => 'required',
            'procedure'=>'required|min:3',
            'cate_id' => 'required',
            'city_id' => 'required',
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
            'license_plate'=>'bạn  phải nhập biển số xe',
            'license_plate.min'=>'Biến số xe chưa phù hợp',
            'license_plate.max'=>'Biến số xe chưa phù hợp',
            'model_id.required' => 'chon model xe',
            'gear.required' => 'không để trống',
            'procedure' => 'bạn cần có it nhất 1 thủ tục ',
            'cate_id.required' => 'Bạn chưa chọn danh mục xe',
            'city_id.required' => 'Bạn chưa chọn thành phố',
            'image.required' => 'Bạn chưa chọn Ảnh đại diện',
        ];
    }
}
