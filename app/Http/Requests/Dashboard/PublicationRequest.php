<?php
declare(strict_types = 1);

namespace App\Http\Requests\Dashboard;

use App\Enums\PublicationType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PublicationRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
         $publicationTypes = PublicationType::values();
         return[
              'name'     => ['required', 'string', 'max:191'],
              'type'     => ['required', 'string', 'in:'.implode(',', $publicationTypes)],
              'file_url' => ['required_without:file_url_old', 'file', 'mimes:pdf', 'max:10240'],
         ];
    }

     public function messages() : array
     {
          return [
               'file_url.required_without' => 'The file url field is required.',
          ];
     }

}
