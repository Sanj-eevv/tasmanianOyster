<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\JohnReserve;

class JohnReserveController extends Controller
{
     public function index(){
          return view('front.pages.john-reserve.index');
     }

     public function details($slug){
          $johnReserve = JohnReserve::where('slug', $slug)->first();
          return view('front.pages.john-reserve.detail', compact('johnReserve'));
     }
}