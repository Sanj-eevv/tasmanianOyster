<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\JohnReserve;

class OrderController extends Controller
{
     public function index(){
          /*TODO:: ADD ACTIVE SCOPE */
          $johnReserves = JohnReserve::query()->get();
          return view('front.pages.order.index')->with(['johnReserves' => $johnReserves]);
     }
}