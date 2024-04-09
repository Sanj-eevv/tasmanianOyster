<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoryRequest;
use App\Http\Resources\Story\StoryResource;
use App\Interfaces\StoryRepositoryInterface;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
     public function __construct(protected StoryRepositoryInterface $storyRepository){}

     public function index(Request $request){
          if ($request->ajax()) {
               $columns = [
                    'id',
                    'year',
                    'title',
                    'created_at',
               ];
               $meta = AppHelper::defaultTableInput([
                    'offset' => $request->input('start'),
                    'limit'  => $request->input('length') ?? '-1',
                    'order'  => $columns[$request->input('order.0.column')] ?? $columns[0],
                    'dir'    => $request->input('order.0.dir'),
                    'search' => $request->input('search.value'),
               ]);
               $resp = $this->storyRepository->paginatedWithQuery($meta);
               $resp['data'] = StoryResource::collection($resp['data']);
               $resp['draw'] = intval($request->input('draw'));
               return response()->json($resp);
          }
          return view('dashboard.stories.index');
     }

     public function create(){
          $story = new Story();
          return view('dashboard.stories._create',compact('story'));
     }

     public function store(StoryRequest $request){
         $story = $this->storyRepository->store($request->validated());
         return redirect()->route('dashboard.stories.show', $story);
     }

     public function show(Story $story){
          return view('dashboard.stories.show', compact('story'));
     }

     public function edit(Story $story){
          return view('dashboard.stories._edit', compact('story'));
     }

     public function update(StoryRequest $request, Story $story){
          $this->storyRepository->update($request->validated(), $story);
          return redirect()->route('dashboard.stories.show', $story);
     }

     public function destroy(Story $story){
          $this->storyRepository->delete($story);
          return response()->json([
               'message' => 'Story Successfully Deleted',
          ]);
     }
}