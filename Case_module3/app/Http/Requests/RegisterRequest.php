<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|max:255',
            'password' => 'required|min:6'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email là bắt buộc!',
            'password.required' => 'Mật khẩu là bắt buộc!',
            'password.min' => 'Mật khẩu có ít nhất 6 kí tự',
        ];
    }
}
