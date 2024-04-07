<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class JohnReserveController extends Controller
{
     public function index(){
          return view('front.templates.john-reserve');
     }
}