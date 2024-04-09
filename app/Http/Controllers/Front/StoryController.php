<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Front\StoryService;

class StoryController extends Controller
{
     public function __construct(protected StoryService $storyService){}

     public function index(){
          $view_data['stories'] = $this->storyService->all();
          return view('front.pages.story.index')->with($view_data);
     }
}