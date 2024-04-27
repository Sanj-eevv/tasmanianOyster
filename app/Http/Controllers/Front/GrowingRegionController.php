<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\GrowingRegion;
use App\Models\JohnReserve;

class GrowingRegionController extends Controller
{
     public function details(string $slug){
          $growingRegion = GrowingRegion::query()
               ->where(column:'slug', operator: '=', value: $slug)
               ->with(['teams', 'galleries'])
               ->firstOrFail();
          return view(view: 'front.pages.growing-region.detail', data: compact(var_name: 'growingRegion'));
     }

}