<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\DTO\GrowingRegionDTO;
use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\GrowingRegionRequest;
use App\Http\Resources\GrowingRegion\GrowingRegionResource;
use App\Interfaces\GrowingRegionRepositoryInterface;
use App\Models\GrowingRegion;
use App\Services\Dashboard\GrowingRegionGalleryService;
use App\Services\Dashboard\GrowingRegionService;
use App\Services\Dashboard\TeamService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GrowingRegionController extends Controller
{
     public function __construct(protected GrowingRegionRepositoryInterface $growingRegionRepository, protected GrowingRegionService $growingRegionService, protected
     GrowingRegionGalleryService $growingRegionGalleryService){}


    public function index(Request $request)
    {
         if ($request->ajax()) {
              $columns = [
                   'id',
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
              $resp = $this->growingRegionRepository->paginatedWithQuery($meta);
              $resp['data'] = GrowingRegionResource::collection($resp['data']);
              $resp['draw'] = intval($request->input('draw'));
              return response()->json($resp);
         }
         return view('dashboard.growing-regions.index');
    }


    public function create()
    {
         $growingRegion = new GrowingRegion();
         return view('dashboard.growing-regions._create',compact('growingRegion'));
    }


     /**
      * @throws Exception
      */
     public function store(GrowingRegionRequest $request)
    {
         $growingRegionDto = GrowingRegionDTO::fromArray($request->validated());
         $growingRegion = $this->growingRegionService->store($growingRegionDto);
         return response()->json(['message' => 'Growing Region Created', 'redirectUrl' => route('dashboard.growing-regions.edit', $growingRegion->id)]);
    }


    public function edit(GrowingRegion $growingRegion)
    {
         $growingRegion->load(['teams', 'galleries']);
         return view('dashboard.growing-regions._edit', compact('growingRegion'));
    }


     /**
      * @throws Exception
      */
     public function update(GrowingRegionRequest $request, GrowingRegion $growingRegion)
    {
         $growingRegionDto = GrowingRegionDTO::fromArray(input: $request->validated());
         $this->growingRegionService->update(growingRegionDTO: $growingRegionDto, growingRegion: $growingRegion);
         $toDeleteAttachments = json_decode(json: $request->validated()['removed_attachments'] ?? '' ) ?? [];
         $this->growingRegionGalleryService->massDelete(galleryIds: $toDeleteAttachments);
         return response()->json(data: ['message' => 'Growing Region Updated', 'redirectUrl' => route(name:'dashboard.growing-regions.edit', parameters:
              $growingRegion->getAttribute
         (key:'id'))]);
    }


    public function destroy(GrowingRegion $growingRegion)
    {
         $this->growingRegionService->delete($growingRegion);
         return response()->json([
              'message' => 'Growing Region Successfully Deleted',
         ]);
    }
}
