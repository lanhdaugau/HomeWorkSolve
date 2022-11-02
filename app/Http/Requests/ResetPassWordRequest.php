<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPassWordRequest extends FormRequest
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
            'password'=>
            [
                'required',
                'confirmed',
                'min:4'
            ],
            'password_confirmation'=>
            [
                'required'
            ]
        ];
    }
    public function messages()
    {
        return [
            
            'required'=>'Trường này không được bỏ trống',
            'min'=>'Độ dài quá ngắn',
            'confirmed'=>'Mật khẩu không trùng khớp',
        ];
    }
}
