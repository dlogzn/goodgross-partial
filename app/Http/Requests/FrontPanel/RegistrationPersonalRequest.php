<?php

namespace App\Http\Requests\FrontPanel;

use App\Models\Account;
use App\Models\BusinessAccount;
use App\Models\PersonalAccount;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationPersonalRequest extends FormRequest
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

        if ($this->user === 'null') {
            $rules['first_name'] = [
                'required',
                'string',
                'max:255',
            ];
            $rules['last_name'] = [
                'required',
                'string',
                'max:255',
            ];
            $rules['country_id'] = [
                'required',
                'numeric',
            ];
            $rules['email'] = [
                'required',
                'max:255',
                function($attribute, $value, $fail) {
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $fail('The ' . $attribute . ' format is not valid.');
                    }
                    if ( ! empty(User::where('email', $value)->first())) {
                        $fail('The ' . $attribute . ' has already been taken.');
                    }
                }
            ];

            $rules['phone'] = [
                'nullable',
                'max:255',
                function($attribute, $value, $fail) {
                    if ( ! empty(PersonalAccount::where('phone', $value)->first())) {
                        $fail('The ' . $attribute . ' has already been taken.');
                    }
                    if ( ! empty(BusinessAccount::where('phone', $value)->first())) {
                        $fail('The ' . $attribute . ' has already been taken.');
                    }
                }
            ];
        }

        $rules['password'] = [
            'required',
            'string',
            'min:6',
            'max:20',
            'confirmed'
        ];

        $rules['password_confirmation'] = [
            'required',
            'string',
            'min:6',
            'max:20',
        ];

        $rules['terms_of_service'] = [
            'accepted',
        ];

        $rules['privacy_policy'] = [
            'accepted',
        ];

        return $rules;
    }


}
