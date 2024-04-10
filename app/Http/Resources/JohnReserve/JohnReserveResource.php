<?php
declare(strict_types = 1);

namespace App\Http\Resources\JohnReserve;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\View;

class JohnReserveResource extends JsonResource
{

    public function toArray(Request $request): array
    {
         $heroImage = asset("storage/uploads/$this->hero_image");
         return [
              'id'         => $this->id,
              'title'      => ucwords($this->title),
              'hero_image' => "<a target='_blank' href='$heroImage'><img src='$heroImage' alt='hero image' id='kt_preview_img'/></a>",
              'created_at' => Carbon::parse($this->created_at)->format('m-d-Y'),
              'action'     => View::make('dashboard.john-reserves._action')->with('r', $this)->render(),
         ];
    }
}
