<?php
declare(strict_types = 1);

namespace App\Http\Resources\BoardExecutive;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\View;

class BoardExecutiveResource extends JsonResource
{
    public function toArray(Request $request): array
    {
         $image = asset("storage/uploads/$this->image");
         return [
              'id'          => $this->id,
              'name'        => ucwords($this->name),
              'role'        => ucwords($this->role),
              'image'       => "<a target='_blank' href='$image'><img src='$image' alt='hero image' class='kt_preview_img' id='kt_preview_img'/></a>",
              'created_at'  => Carbon::parse($this->created_at)->format('m-d-Y'),
              'action'      => View::make('dashboard.board-executives._action')->with('r', $this)->render(),
         ];
    }
}
