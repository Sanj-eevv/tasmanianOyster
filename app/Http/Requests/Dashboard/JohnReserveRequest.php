<?php
declare(strict_types = 1);

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JohnReserveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(Request $request): array
    {
         return[
              'title'       => ['required', 'string', 'max:191',  Rule::unique('john_reserves')->ignore($request->route('john_reserve')),],
              'description' => ['required', 'string', 'min:100', 'max:500'],
              'hero_image'  => ['required_without:hero_image_old', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:2048'],
              'umami'       => ['required', 'numeric', 'min:0.1', 'max:5'],
              'saltiness'   => ['required', 'numeric', 'min:0.1', 'max:5'],
              'texture'     => ['required', 'numeric', 'min:0.1', 'max:5'],
              'finish'      => ['required', 'numeric', 'min:0.1', 'max:5'],
              'is_active'   => ['nullable', 'boolean'],
         ];
    }

     public function messages() : array
     {
          return [
               'hero_image.required_without' => 'Hero image is required.'
          ];
     }

}
