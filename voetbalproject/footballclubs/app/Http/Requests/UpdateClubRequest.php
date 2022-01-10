<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClubRequest extends FormRequest
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
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name must consist be a string',
            'name.max' => 'Name must be smaller than 255 characters',

            'rank.required'  => 'Rank is required',
            'rank.number' => 'Rank must be a number',
            'rank.between' => 'Rank must be between 0 and 30',
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
            'name' => 'required|string|max:255',
            'rank' => 'required|numeric|unique:clubs|between:1,30'
        ];
    }
}
