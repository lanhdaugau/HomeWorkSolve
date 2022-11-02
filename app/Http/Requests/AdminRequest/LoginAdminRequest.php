<?php

namespace App\Http\Requests\AdminRequest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Http\FormRequest;

class LoginAdminRequest extends FormRequest
{
    use HasFactory;
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
            'email'=>
            [
                'bail',
                'required'
            ],
            'password'=>
            [
                'bail',
                'required'
            ]
        ];
    }
    public function messages():array
    {
        return [
            'required'=>'Trường này không được bỏ trống',
        ];
    }
}
