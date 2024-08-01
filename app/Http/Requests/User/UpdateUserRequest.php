<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
    public $idUser;
    public function setIdUser($idUser)  {
        $this->idUser=$idUser;
    }
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
                    
                    'phone' => 'required|string|max:10',
                    'address' => 'required|string|max:255',
                    'new_password' => 'bail|nullable|required_with:confirm_new_password|max:255|min:8',
                    'confirm_new_password' => 'required_with:new_password|max:255|same:new_password'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên',
                    'name.max' => 'độ dài tối đa: 255 ký tự',
                    
                    'phone.required' => 'Vui lòng nhập tên',
                    'address.required' => 'Vui lòng nhập tên',
                    'address.max' => 'độ dài tối đa: 255 ký tự',
                    'phone.max' => 'độ dài tối đa: 10 ký tự',
                    'new_password.max' => 'độ dài tối đa: 255 ký tự',
                    'confirm_new_password.same' => 'Mật khẩu không khớp',
                    'confirm_new_password.max' => 'độ dài tối đa: 255 ký tự',
        ];
    }
}
