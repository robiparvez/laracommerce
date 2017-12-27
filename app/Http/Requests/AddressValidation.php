<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressValidation extends FormRequest
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
            'address' => 'required',
            'city'  => 'required',
            'state' => 'required',
            'zipcode' => 'required|integer',
            'country' => 'required',
            'phone' => 'required|max:11',
        ];
    }

    public function messages()
    {
        return [
            'address.required' => 'Please enter the address field',
            'city.required' => 'Please enter the city field',
            'state.required' => 'Please enter the state field',
            'zipcode.required' => 'Please enter the zipcode field',
            'country.required' => 'Please enter the country field',
            'phone.required' => 'Please enter the phone field',

        ];
    }
}
