<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'login_email' => 'bail|required|email|exists:users,email',
                'login_password' => 'bail|required',
        ];
    }

    public function messages()
    {
        return [
            'login_name.required' => 'Vui lòng điền vào trường này',
            'login_email.required' => 'Vui lòng điền vào trường này',
            'login_password.required' => 'Vui lòng điền vào trường này',
            'login_email.email' => 'Vui lòng điền đúng định dạng email',
            'login_email.exists' => 'Email không tồn tại hoặc chưa được đăng ký',
        ];
    }
}
