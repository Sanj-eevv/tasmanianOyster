<?php
declare(strict_types = 1);

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
             'email'           => ['required', 'string', 'email', 'max:191'],
             'quantity'        => ['required', 'numeric', 'min:0'],
             'description'     => ['required', 'string'],
             'john_reserve_id' => ['required', 'exists:john_reserves,id']
        ];
    }
}
