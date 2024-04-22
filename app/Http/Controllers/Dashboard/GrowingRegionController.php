<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\GrowingRegionRequest;
use App\Http\Resources\GrowingRegion\GrowingRegionResource;
use App\Interfaces\GrowingRegionRepositoryInterface;
use App\Models\GrowingRegion;
use App\Services\Dashboard\GrowingRegionService;
use Illuminate\Http\Request;

class GrowingRegionController extends Controller
{
     public function __construct(protected GrowingRegionRepositoryInterface $growingRegionRepository, protected GrowingRegionService $growingRegionService){}


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


    public function store(GrowingRegionRequest $request)
    {
         $growingRegions = $this->growingRegionService->store($request->validated());
         return redirect()->route('dashboard.growing-regions.show', $growingRegions);
    }


    public function show(GrowingRegion $growingRegion)
    {
         return view('dashboard.growing-regions.show', compact('growingRegion'));
    }


    public function edit(GrowingRegion $growingRegion)
    {
         return view('dashboard.growing-regions._edit', compact('growingRegion'));
    }


    public function update(GrowingRegionRequest $request, GrowingRegion $growingRegion)
    {
         $growingRegion = $this->growingRegionService->update($request->validated(), $growingRegion);
         return redirect()->route('dashboard.growing-regions.show', $growingRegion);
    }


    public function destroy(GrowingRegion $growingRegion)
    {
         $this->growingRegionService->delete($growingRegion);
         return response()->json([
              'message' => 'Growing Region Successfully Deleted',
         ]);
    }
}
