<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'caption'=>
            [
                'bail',
                'required'
            ],
            'content'=>
            [
                'bail',
                'required'
            ]
        ];
    }
    public function messages():array
    {
        return [
            
            
                'required'=>':attribute không được bỏ trống'
            
        ];
    }
    public function attributes():array
    {
        return [
            'caption'=>'Tiêu đề bài viết',
            'content'=>'Nội dung bài viết',
        ];
    }
}
