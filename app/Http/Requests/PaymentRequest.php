<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       // For the store method
       if (request()->isMethod('post')) {
        return [
            'pay_time' => 'required|string|max:258',
            'pay_date' => 'required|string',
            'amount' => 'required|string',
        ];
    }

    // For the update method (i.e. put or patch method)
    else {
        return [
            'pay_time' => 'required|string|max:258',
            'pay_date' => 'required|string',
            'amount' => 'required|string',
        ];
    }
    }
    
    public function messages()
    {
        if (request()->isMethod('post')) {
            return [
                'pay_time' => 'pay_time field is required!',
                'pay_date' => 'pay_date field is required!',
                'amount' => 'Amount field is required!'
            ];
        } else {
            return [
                'pay_time' => 'pay_time field is required!',
                'pay_date' => 'pay_date field is required!',
                'amount' => 'Amount field is required!'
            ];
        }
    }
}
