<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0|max:99999999',
            'discount' => 'required|numeric|min:0|max:100',
            'quantity' => 'required|integer|min:1',
            'description' => 'required|string|max:500',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'Vui lòng điền vào trường này',
            'price.required'=>'Vui lòng điền vào trường này',
            'quantity.required'=>'Vui lòng điền vào trường này',
            'discount.required'=>'Vui lòng điền vào trường này',
            'description.required'=>'Vui lòng điền vào trường này',
            'name.max'=>'Độ dài tối đa là 255 ký tự',
            'description.max'=>'Độ dài tối đa là 1000 ký tự',
            'discount.max'=>'Giảm giá tối đa là 100%',
            'discount.min'=>'Tối thiểu là 0',
            'quantity.min'=>'Tối thiểu là 1',
            'price.min'=>'Tối thiểu là 0',
            'price.max'=>'Tối đa là 8 chữ số',
        ];
    }
}
