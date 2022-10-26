<?php

namespace App\Http\Request\AdminRequest\UserRequest;

use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => 'required|min:3|max:250',
            'gender' => 'required',
            'email' => 'required_without:phone|nullable|email|unique:login',
            'phone' => ['required_without:email', 'nullable', new Phone(), 'unique:login'],
            'password' => 'required',
            'birthday' => 'required|date',
            'avatar' => 'required|image',
            'idCity' => 'required',
            'idDistrict' => 'required',
            'idWard' => 'required',
            'isActive' => ''
        ];
    }

    public function prepareForValidation()
    {
        if (!$this->filled('isActive')) {
            $this->merge([
                'isActive' => 0
            ]);
        }

        if ($this->filled('password')) {
            $this->merge([
                'password' => bcrypt(request('password'))
            ]);
        } else {
            $this->request->remove('password');
        }
    }
}
