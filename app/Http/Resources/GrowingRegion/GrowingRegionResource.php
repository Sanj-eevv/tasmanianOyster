<?php
declare(strict_types = 1);

namespace App\Http\Resources\GrowingRegion;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\View;

class GrowingRegionResource extends JsonResource
{

    public function toArray(Request $request): array
    {
         $heroImage = asset(path:"storage/uploads/$this->hero_image");
         $heroImageSub = asset(path:"storage/uploads/$this->hero_image_sub");
         return [
              'id'             => $this->id,
              'title'          => ucwords(string: $this->title),
              'hero_image'     => "<a target='_blank' href='$heroImage'><img src='$heroImage' alt='hero image' class='kt_preview_img'/></a>",
              'hero_image_sub' => "<a target='_blank' href='$heroImageSub'><img src='$heroImageSub' alt='hero image sub' class='kt_preview_img'/></a>",
              'created_at'     => Carbon::parse(time: $this->created_at)->format(format: 'm-d-Y'),
              'action'         => View::make(view: 'dashboard.growing-regions._action')->with(key: 'r', value: $this)->render(),
         ];
    }
}
