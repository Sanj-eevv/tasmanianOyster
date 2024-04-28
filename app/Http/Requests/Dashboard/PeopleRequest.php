<?php
declare(strict_types = 1);

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class PeopleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
         return[
              'file' => ['required', 'image', 'max:10240']
         ];
    }

}
