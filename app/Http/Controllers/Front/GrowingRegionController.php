<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\JohnReserve;

class GrowingRegionController extends Controller
{
     public function index(){
          return view('front.pages.growing-region.index');
     }

}