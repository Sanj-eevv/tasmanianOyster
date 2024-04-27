<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\JohnReserve;

class JohnReserveController extends Controller
{
     public function index(){
          return view(view: 'front.pages.john-reserve.index');
     }

     public function details(string $slug){
          $johnReserve = JohnReserve::query()->where(column: 'slug', operator: '=', value: $slug)->firstOrFail();
          return view(view: 'front.pages.john-reserve.detail', data: compact(var_name: 'johnReserve'));
     }
}