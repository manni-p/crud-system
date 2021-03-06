<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Request;

class ResultsRequest extends FormRequest
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

    public function messages()
    {
        return [
        'name.required'    => 'Name is required',
        'price.required'    => 'Price is required',
        'description.required'    => 'Description is required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            //
        'name' => 'bail|required',
        'description' => 'required',
        'price' => 'required',
        ];
    }

}
