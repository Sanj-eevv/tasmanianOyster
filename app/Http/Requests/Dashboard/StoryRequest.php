<?php
declare(strict_types = 1);

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StoryRequest extends FormRequest
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
              'year'        => [
                   'required',
                   'numeric',
                   'digits:4',
                   Rule::unique('stories')->ignore($request->route('story')),
              ],
              'title'       => ['required', 'string', 'max:191'],
              'description' => ['required', 'string', 'min:100', 'max:255'],
         ];
    }

     public function messages() : array
     {
          return [
               'year.numeric'     => 'The year field must match the format XXXX.',
               'year.digits'      => 'The year field must match the format XXXX.',
               'year.date_format' => 'The year field must match the format XXXX.',
          ];
     }

}
