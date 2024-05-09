<?php
declare(strict_types = 1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoardExecutiveRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
             'name'        => ['required', 'string', 'max:191'],
             'role'        => ['required', 'string', 'max:191'],
             'description' => ['nullable', 'string'],
             'image'       => ['required_without:image_old', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:10240'],
        ];
    }

     public function messages() : array
     {
          return [
               'image.required_without' => 'Image field is required.'
          ];
     }
}
