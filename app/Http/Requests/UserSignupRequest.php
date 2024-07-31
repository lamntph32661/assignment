<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSignupRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|string|min:8|same:confirmpassword',
            'confirmpassword' => 'required|string|max:8'
        ];
    }
    public function messages()  {
        return [
            'name.required' => 'Vui lòng điền vào trường này',
            'email.required' => 'Vui lòng điền vào trường này',
            'password.required' => 'Vui lòng điền vào trường này',
            'confirmpassword.required' => 'Vui lòng điền vào trường này',
            'email.unique' => 'Email đã được sử dụng, vui lòng dùng email khác',
            'password.same' => 'Password xác nhận không khớp',
            'password.min' => 'Mật khẩu phải có tối thiểu 8 ký tự',
            'confirmpassword.min' => 'Mật khẩu phải có tối thiểu 8 ký tự',
        ];
    }
}
