<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Front;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Interfaces\GalleryRepositoryInterface;
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
          $images = $galleries->pluck('file_name', 'file_url')->toArray();
          return response()->json(['message' => 'Success', 'images' => $images, 'total' => count($galleries)]);
     }
}