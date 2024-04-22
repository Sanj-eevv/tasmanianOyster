<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\JohnReserve;

class JohnReserveController extends Controller
{
     public function index(){
          return view('front.pages.john-reserve.index');
     }

     public function details($slug){
          $johnReserve = JohnReserve::query()->where('slug', $slug)->firstOrFail();
          return view('front.pages.john-reserve.detail', compact('johnReserve'));
     }
}