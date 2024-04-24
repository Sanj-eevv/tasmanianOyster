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
              $meta = AppHelper::defaultTableInput(input: [
                   'offset' => $request->input(key:'start'),
                   'limit'  => $request->input(key:'length') ?? '-1',
                   'order'  => $columns[$request->input(key: 'order.0.column')] ?? $columns[0],
                   'dir'    => $request->input(key: 'order.0.dir'),
                   'search' => $request->input(key: 'search.value'),
              ]);
              $resp = $this->growingRegionRepository->paginatedWithQuery(meta: $meta);
              $resp['data'] = GrowingRegionResource::collection(resource: $resp['data']);
              $resp['draw'] = intval(value: $request->input(key:'draw'));
              return response()->json(data: $resp);
         }
         return view(view: 'dashboard.growing-regions.index');
    }


    public function create()
    {
         $growingRegion = new GrowingRegion();
         return view(view: 'dashboard.growing-regions._create',data: compact(var_name: 'growingRegion'));
    }


     /**
      * @throws Exception
      */
     public function store(GrowingRegionRequest $request)
    {
         $growingRegionDto = GrowingRegionDTO::fromArray(input: $request->validated());
         $growingRegion = $this->growingRegionService->store(growingRegionDto: $growingRegionDto);
         return response()->json(data: ['message' => 'Growing Region Created', 'redirectUrl' => route(name: 'dashboard.growing-regions.edit', parameters: $growingRegion->id)]);
    }


    public function edit(GrowingRegion $growingRegion)
    {
         $growingRegion->load(relations: ['teams', 'galleries']);
         return view(view:'dashboard.growing-regions._edit', data: compact(var_name: 'growingRegion'));
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
              $growingRegion->getAttribute(key:'id'))]);
    }


    public function destroy(GrowingRegion $growingRegion)
    {
         $this->growingRegionService->delete(growingRegion: $growingRegion);
         return response()->json(data: [
              'message' => 'Growing Region Successfully Deleted',
         ]);
    }
}
