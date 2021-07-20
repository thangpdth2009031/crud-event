<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemoValidateFormRequest extends FormRequest
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
            'name' => 'required | min: 5 | max: 20',
            'description' => 'required | min: 10 | max: 30',
            'price' => 'numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vụi lòng nhập tên',
            'name.min' => 'Vui lòng nhập ít nhất là 5 kí tự',
            'name.max' => 'Vui lòng tối đa 20 kí tự',

            'description.required'=>'Vui lòng nhập description',
            'description.min' => 'Vui lòng nhập ít nhất là 5 kí tự',
            'description.max' => 'Vui lòng tối đa 20 kí tự',

            'price.numeric'=>'Giá phải là kiểu số'
        ];
    }
    public function withValidator($validator) {
        $validator->after(function ($validator) {
            if ($this->get('name')=='cuong') {
                $validator->errors()->add('name', 'Không thể nhập với tên cuong');
            }
        });
    }
}
