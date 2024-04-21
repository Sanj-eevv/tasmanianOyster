<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Front;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Interfaces\GalleryRepositoryInterface;
use App\Services\Dashboard\GalleryService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function __construct(protected GalleryRepositoryInterface $galleryRepository){

     }
     public function __invoke(Request $request){
          if(!$request->ajax()){
               return view('front.pages.home.index');
          }
          $pageNumber = $request->input('page', 1);
          $limit = 12;
          $meta = AppHelper::defaultTableInput([
               'offset' => ($pageNumber - 1) * $limit,
               'limit'  => $limit,
          ]);
          $response = $this->galleryRepository->paginatedWithQuery($meta);
          $galleries = $response['data'];
          $html = view('front.pages.home._partials._gallery_image', compact('galleries'))->render();
          return response()->json(['message' => 'Success', 'html' => $html, 'total' => count($galleries)]);
     }
}