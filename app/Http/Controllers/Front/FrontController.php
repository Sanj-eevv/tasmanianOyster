<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class FrontController extends Controller
{
     public function __invoke(){
          return view('front.home');
     }
}