<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RatingRequest extends FormRequest
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
    public function rules():array
    {
        return [
            'content'=>
            [   'bail',
                'required',
                
            ],
            'rating'=>
            [
                'bail',
                'required'
            ],
            
        ];
    }
    public function messages():array
    {
        return [
            
            
                'required'=>':attribute phải thực hiện trước khi đánh giá'
            
        ];
    }
    public function attributes():array
    {
        return [
            'rating'=>'Lượt sao đánh giá',
            'content'=>'Nội dung đánh giá',
        ];
    }
}
