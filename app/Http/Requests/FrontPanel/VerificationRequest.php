<?php

namespace App\Http\Requests\FrontPanel;

use App\Models\Account;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class VerificationRequest extends FormRequest
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

        $rules['verification_code'] = [
            'required',
            'digits:6',
            function($attribute, $value, $fail) {
                if (empty(User::where('verification_token', Session::get('verification_token'))->where('verification_code', $value)->first())) {
                    $fail('Incorrect Verification Code');
                }
            }
        ];
        return $rules;
    }
}
