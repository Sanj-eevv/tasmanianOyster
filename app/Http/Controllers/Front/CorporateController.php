<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Front;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Interfaces\PeopleRepositoryInterface;
use App\Services\Dashboard\BoardExecutiveService;
use App\Services\Dashboard\PublicationService;
use Illuminate\Http\Request;

class CorporateController extends Controller
{
     public function __construct(protected PeopleRepositoryInterface $peopleRepository){}

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
          $response = $this->peopleRepository->paginatedWithQuery($meta);
          $galleries = $response['data'];
          $images = $galleries->pluck('file_name', 'file_url')->toArray();
          return response()->json(['message' => 'Success', 'images' => $images, 'total' => count($galleries)]);
     }

     public function qualityGrading(){
          return view('front.pages.corporate.quality-grading');
     }

     public function boardExecutive(BoardExecutiveService $boardExecutiveService){
          $boardExecutives = $boardExecutiveService->all();
          return view('front.pages.corporate.board-executive')->with(['boardExecutives' => $boardExecutives]);
     }

     public function investors(){
          return view('front.pages.corporate.investors');
     }

     public function publications(PublicationService $publicationService){
          $publications = $publicationService->all()->groupBy('type');
          return view('front.pages.corporate.publications')->with(['publications' => $publications]);
     }
}