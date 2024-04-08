<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class StoryController extends Controller
{
     public function index(){
          return view('front.pages.story');
     }
}