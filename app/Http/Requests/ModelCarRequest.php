<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class ModelCarRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('models')->ignore($this->id),
                'min:4'
            ]
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập vào Form.',
            'name.unique' => 'Tên hãng xe đã tồn tại.',
            'name.min' => 'Tên hãng xe không ít hơn 4 ký tự.',
        ];
    }
}
