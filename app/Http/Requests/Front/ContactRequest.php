<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
             'full_name'       => ['required', 'string', 'max:191'],
             'phone_number'    => ['nullable', 'string', 'max:191'],
             'email'           => ['required', 'email', 'max:191'],
             'referral_source' => ['nullable', 'string', 'max:191'],
             'message'         => ['required', 'string', 'max:255']
        ];
    }
}
