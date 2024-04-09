<?php
declare(strict_types = 1);

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
              'app_name'        => ['required', 'string', 'max:191'],
              'company_email'   => ['required', 'email',],
              'company_address' => ['required', 'string', 'max:191'],
              'company_phone'   => ['required', 'string', 'max:191'],
              'company_tagline' => ['nullable', 'string', 'max:191'],
              'copyright_text'  => ['required', 'string', 'max:191'],
              'facebook_url'    => ['nullable', 'string', 'max:191'],
              'instagram_url'   => ['nullable', 'string', 'max:191'],
              'twitter_url'     => ['nullable', 'string', 'max:191'],
              'linkedin_url'    => ['nullable', 'string', 'max:191'],
              'map_iframe'      => ['nullable', 'string'],
              'app_logo'        => ['required_without:app_logo_old', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:2048'],
         ];
    }
}
