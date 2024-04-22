<?php
declare(strict_types = 1);

namespace App\Http\Requests\Dashboard;

use App\Models\JohnReserve;
use App\Services\Dashboard\JohnReserveService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class JohnReserveRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(Request $request): array
    {
         return[
              'title'       => ['required', 'string', 'max:191',  Rule::unique('john_reserves')->ignore($request->route('john_reserve'))],
              'description' => ['required', 'string', 'min:100', 'max:500'],
              'hero_image'  => ['required_without:hero_image_old', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:2048'],
              'umami'       => ['required', 'numeric', 'min:0.1', 'max:5'],
              'saltiness'   => ['required', 'numeric', 'min:0.1', 'max:5'],
              'texture'     => ['required', 'numeric', 'min:0.1', 'max:5'],
              'finish'      => ['required', 'numeric', 'min:0.1', 'max:5'],
              'is_active'   => ['nullable', 'boolean'],
         ];
    }

     public function validated($key = null, $default = null): array
     {
          $validated = parent::validated();
          return [...$validated, ...[
               'is_active' => $validated['is_active'] ?? false,
               'slug'      => Str::slug($validated['title']),
               'umami'       => number_format((float) $validated['umami'], 1),
               'saltiness'   => number_format((float) $validated['saltiness'], 1),
               'texture'     => number_format((float) $validated['texture'], 1),
               'finish'      => number_format((float) $validated['finish'], 1),
          ]];
     }

     public function after(Request $request): array
     {
          return [
               function (Validator $validator) use($request) {
                    $titleSlug = Str::slug($request->input('title'));
                    $johnReserve = $request->route('john_reserve') ?? new JohnReserve();
                    $slugExist = resolve(JohnReserveService::class)->findBySlug($titleSlug,$johnReserve->slug);
                    if ($slugExist) {
                         $validator->errors()->add(
                              'title',
                              'The title has already been taken.'
                         );
                    }
               }
          ];
     }


     public function messages() : array
     {
          return [
               'hero_image.required_without' => 'Hero image is required.'
          ];
     }

}
