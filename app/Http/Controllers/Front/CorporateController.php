<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Front;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Interfaces\GalleryRepositoryInterface;
use App\Services\Front\StoryService;
use Illuminate\Http\Request;

class CorporateController extends Controller
{
     public function __construct(protected StoryService $storyService,protected GalleryRepositoryInterface $galleryRepository){}

     public function ourPeople(Request $request){
          if(!$request->ajax()){
               return view('front.pages.corporate.our-people');
          }
          $pageNumber = $request->input('page', 1);
          $limit = 12;
          $meta = AppHelper::defaultTableInput([
               'offset' => ($pageNumber - 1) * $limit,
               'limit'  => $limit,
          ]);
          $response = $this->galleryRepository->paginatedWithQuery($meta);
          $galleries = $response['data'];
          $html = view('front.pages.corporate._partials._our_people--gallery', compact('galleries'))->render();
          return response()->json(['message' => 'Success', 'html' => $html, 'total' => count($galleries)]);
     }

     public function qualityGrading(){
          return view('front.pages.corporate.quality-grading');
     }
}