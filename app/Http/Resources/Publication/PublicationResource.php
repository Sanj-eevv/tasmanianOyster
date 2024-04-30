<?php
declare(strict_types = 1);

namespace App\Http\Resources\Publication;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\View;

class PublicationResource extends JsonResource
{

    public function toArray(Request $request): array
    {
         return [
              'id'         => $this->id,
              'name'       => ucwords($this->name),
              'type'       => ucwords(strtolower(str_replace(['_', '-'], [' ', ' '], $this->type->name))),
              'created_at' => Carbon::parse($this->created_at)->format('m-d-Y'),
              'action'     => View::make('dashboard.publications._action')->with('r', $this)->render(),
         ];
    }
}
