<?php
declare(strict_types = 1);

namespace App\Http\Requests\Dashboard;

use App\Models\GrowingRegion;
use App\Services\Dashboard\GrowingRegionService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class GrowingRegionRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(Request $request): array
    {
         return[
              'title'                       => ['required', 'string', 'max:191', Rule::unique('growing_regions')->ignore($request->route('growing_region'))],
              'subtitle'                    => ['required', 'string', 'max:191'],
              'description'                 => ['required', 'string'],
              'characteristics'             => ['nullable', 'string'],
              'tasting_note'                => ['nullable', 'string'],
              'hero_image'                  => ['required_without:hero_image_old', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:10240'],
              'hero_image_sub'              => ['required_without:hero_image_sub_old', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:10240'],
              'is_active'                   => ['nullable', 'boolean'],
              'galleries'                   => ['nullable', 'array'],
              'galleries.*'                 => ['image', 'mimes:jpeg,png,jpg,svg,webp', 'max:10240'],
              'teams_repeater'              => ['nullable', 'array'],
              'teams_repeater.*.team_id'    => ['nullable', 'exists:teams,id'],
              'teams_repeater.*.team_name'  => ['required', 'string'],
              'teams_repeater.*.team_role'  => ['required', 'string'],
              'teams_repeater.*.team_image' => ['required_without:teams_repeater.*.team_image_old', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:10240'],
              'removed_attachments'         => ['sometimes', 'nullable'],
         ];
    }

     public function validated($key = null, $default = null): array
     {
          $validated = parent::validated();
          return [...$validated, ...[
               'is_active' => $validated['is_active'] ?? false,
               'slug'      => Str::slug($validated['title']),
          ]];
     }

     public function after(Request $request): array
     {
          return [
               function (Validator $validator) use($request) {
                    $titleSlug = Str::slug($request->input('title'));
                    $growingRegion = $request->route('growing_region') ?? new GrowingRegion();
                    $slugExist = resolve(GrowingRegionService::class)->findBySlug($titleSlug,$growingRegion->slug);
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
               'hero_image.required_without'                  => 'Hero image is required.',
               'hero_image_sub.required_without'              => 'Hero image sub is required.',
               'galleries.*.image'                            => 'The file must be an image',
               'galleries.*.max'                              => 'The file field must not be greater than 2048 kilobytes.',
               'teams_repeater.*.team_name.required'          => 'Team name is required.',
               'teams_repeater.*.team_role.required'          => 'Team role is required.',
               'teams_repeater.*.team_image.required_without' => 'Team image is required.'
          ];
     }

}
