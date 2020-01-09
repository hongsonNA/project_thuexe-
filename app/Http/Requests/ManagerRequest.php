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
            'city_id' => 'required',
//            'image_vehicle' => 'required|image|mimes:jpg,png,jpeg',
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
            'city_id.required' => 'Bạn chưa chọn thành phố',
            'image_vehicle.required' => 'Bạn chưa chọn Ảnh đại diện',
//            'image_vehicle.image' => 'Vui lòng chọn file ảnh.',
//            'image_vehicle.mimes' => 'Vui lòng chọn đúng định dạng ảnh: jpg,png,jpeg.',
        ];
    }
}
