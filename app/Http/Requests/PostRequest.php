<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
            'title' => ['required',
                Rule::unique('posts')->ignore($this->id),
                'max:140'],
            'summary' => ['required', 'max:250'],
            'image_posts' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Không được để trống tiêu đề.',
            'title.unique' => 'Tiêu đề bài viết đã có.',
            'title.max' => 'Tiêu đề không quá 150 ký tự.',

            'summary.required' => 'Không được để trống tin vắn tắt.',
            'summary.max' => 'Tin vắn tắt không quá 250 ký tự.',

            'image_posts.mimes' => 'Ảnh bài viết phải chứa đuôi: jpeg, jpg, png, gif.',

        ];
    }
}
