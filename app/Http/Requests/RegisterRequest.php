<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'login' => 'min:6|max:120|unique:account|required',
            'password' => 'min:6|max:30|required',
            'real_name' => 'min:6|max:15|required',
            'social_id' => 'min:7|max:7|required',
            'email' => 'unique:account|required',
        ];
    }
}
