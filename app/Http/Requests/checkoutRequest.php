<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkoutRequest extends FormRequest
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
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required|numeric',
            'address_1'=>'required',
            'address_2'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'pin_code'=>'required|numeric',
        ];
    }
}
