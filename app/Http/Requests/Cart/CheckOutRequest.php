<?php

namespace App\Http\Requests\Cart;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutRequest extends FormRequest
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
           'name_user' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:10'
        ];
    }
    public function messages()  {
        return [
             'name_user.reqiured'=>'Vui lòng điền vào trường này',
             'name_user.max'=>'Độ dài tối đa cho phép là 255 ký tự',
             'address.reqiured'=>'Vui lòng điền vào trường này',
             'address.max'=>'Độ dài tối đa cho phép là 255 ký tự',
             'email.reqiured'=>'Vui lòng điền vào trường này',
             'email.max'=>'Độ dài tối đa cho phép là 255 ký tự',
             'phone.reqiured'=>'Vui lòng điền vào trường này',
             'phone.max'=>'Độ dài tối đa cho phép là 255 ký tự'
        ];
       
    }
}
