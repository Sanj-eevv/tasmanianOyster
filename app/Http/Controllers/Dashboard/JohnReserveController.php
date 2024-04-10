<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\JohnReserve\JohnReserveResource;
use App\Interfaces\JohnReserveRepositoryInterface;
use App\Models\JohnReserve;
use App\Services\Front\JohnReserveService;
use Illuminate\Http\Request;

class JohnReserveController extends Controller
{
     public function __construct(protected JohnReserveRepositoryInterface $johnReserveRepository, protected JohnReserveService $johnReserveService){}


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
              $resp = $this->johnReserveRepository->paginatedWithQuery($meta);
              $resp['data'] = JohnReserveResource::collection($resp['data']);
              $resp['draw'] = intval($request->input('draw'));
              return response()->json($resp);
         }
         return view('dashboard.john-reserves.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(JohnReserve $johnReserve)
    {
         return view('dashboard.john-reserves.show', compact('johnReserve'));
    }


    public function edit(JohnReserve $johnReserve)
    {
        //
    }


    public function update(Request $request, JohnReserve $johnReserve)
    {
        //
    }


    public function destroy(JohnReserve $johnReserve)
    {
         $this->johnReserveService->delete($johnReserve);
         return response()->json([
              'message' => 'John Reserve Successfully Deleted',
         ]);
    }
}
