<?php
declare(strict_types = 1);

namespace App\Http\Resources\Story;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\View;

class StoryResource extends JsonResource
{

    public function toArray(Request $request): array
    {
         return [
              'id'         => $this->id,
              'year'       => $this->year,
              'title'      => $this->title,
              'created_at' => Carbon::parse($this->created_at)->format('m-d-Y'),
              'action'     => View::make('dashboard.stories._action')->with('r', $this)->render(),
         ];
    }
}
