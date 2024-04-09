<?php
declare(strict_types = 1);

namespace App\Http\Resources\Contact;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\View;

class ContactResource extends JsonResource
{

    public function toArray(Request $request): array
    {
         return [
              'id'           => $this->id,
              'full_name'    => $this->full_name,
              'phone_number' => $this->phone_number,
              'email'        => $this->email,
              'created_at'   => Carbon::parse($this->created_at)->format('m-d-Y'),
              'action'       => View::make('dashboard.contacts._action')->with('r', $this)->render(),
         ];
    }
}
