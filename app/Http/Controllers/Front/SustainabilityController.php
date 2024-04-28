<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class SustainabilityController extends Controller
{
     public function __invoke(){
          return view(view: 'front.pages.sustainability.index');
     }
}