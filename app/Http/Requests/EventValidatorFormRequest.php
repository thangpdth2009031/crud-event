<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventValidatorFormRequest extends FormRequest
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
            'eventName' => ['required', 'min:20'],
            'bandNames' => ['required'],
            'startDate' => ['required', 'after:today'],
            'endDate' => ['required', 'after:startDate'],
            'portfolio' => ['required'],
            'ticketPrice' => ['required', 'min:1'],
            'status' => ['required', 'min:0', 'max:3']
        ];
    }

    public function messages()
    {
        return [
            'eventName.required' => 'Vui lòng nhập tên sự kiện',
            'eventName.min' => 'Vui lòng nhập ít nhất 20 kí tự',
            'bandNames.required' => 'Vui lòng nhập tên ban nhạc',
            'startDate.required' => 'Vui lòng nhập ngày bắt đầu sự kiện',
            'startDate.after' => 'Ngày bắt đầu phải sau ngày hiện tại',
            'endDate.required' => 'Vui lòng nhập ngày kết thúc',
            'endDate.after' => 'Ngày kết thúc phải sau ngày bắt đầu',
            'portfolio.required' => 'Vui lòng nhập portfolio',
            'ticketPrice.required' => 'Vui lòng nhập ticker price',
            'ticketPrice.min' => 'Ticket price tối thiểu là 1$',
            'status.min' => 'Status tối thiểu là 0',
            'status.max' => 'Status tối đa là 3'
        ];
    }
}
