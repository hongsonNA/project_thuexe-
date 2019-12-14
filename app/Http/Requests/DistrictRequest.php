<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DistrictRequest extends FormRequest
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
            //
            'city_id' => [
                'required'
            ],
            'name' => [
                'required',
                Rule::unique('districts')->ignore($this->id),
                'min:4'
            ]
        ];
    }

    public function messages()
    {
        return [
            'city_id.required' => 'Vui lòng chọn thành phố.',
            'name.required' => 'Vui lòng chọn quận huyện.',
            'name.unique' => 'Tên quận huyện đã tồn tại.',
            'name.min' => 'Tên quận huyện không ít hơn 4 ký tự.',
        ];
    }
}
