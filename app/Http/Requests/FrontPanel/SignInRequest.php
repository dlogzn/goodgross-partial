<?php

namespace App\Http\Requests\FrontPanel;

use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $rules = [];
        $rules['email'] = [
            'required',
            'email',
            'max:255'
        ];
        $rules['password'] = [
            'required',
            'string',
            'min:6',
            'max:255'
        ];
        return $rules;
    }
}
