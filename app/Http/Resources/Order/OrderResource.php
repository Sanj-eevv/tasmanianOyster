<?php
declare(strict_types = 1);

namespace App\Http\Resources\Order;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\View;

class OrderResource extends JsonResource
{

    public function toArray(Request $request): array
    {
         return [
              'id'         => $this->id,
              'email'      => $this->email,
              'quantity'   => $this->quantity,
              'title'      => $this->title,
              'created_at' => Carbon::parse($this->created_at)->format('m-d-Y'),
              'action'     => View::make('dashboard.orders._action')->with('r', $this)->render(),
         ];
    }
}
