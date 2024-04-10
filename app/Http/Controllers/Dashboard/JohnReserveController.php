<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\JohnReserveRequest;
use App\Http\Resources\JohnReserve\JohnReserveResource;
use App\Interfaces\JohnReserveRepositoryInterface;
use App\Models\JohnReserve;
use App\Models\Story;
use App\Services\Front\JohnReserveService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
         $johnReserve = new JohnReserve();
         return view('dashboard.john-reserves._create',compact('johnReserve'));
    }


    public function store(JohnReserveRequest $request)
    {
         $image = $request->file('hero_image');
         $imageName = renameImageFileUpload($image);
         $image->storeAs('public/uploads/john-reserve', $imageName);
         $imageName =  "john-reserve/$imageName";
         $johnReserve = JohnReserve::query()->create([
               'title'       => $request->input('title'),
               'slug'        => Str::slug($request->input('title')),
               'description' => $request->input('description'),
               'hero_image'  => $imageName,
               'umami'       => number_format((float)$request->input('umami'),1),
               'saltiness'   => number_format((float)$request->input('saltiness'),1),
               'texture'     => number_format((float)$request->input('texture'),1),
               'finish'      => number_format((float)$request->input('finish'),1),
               'is_active'   => $request->input('is_active', false),
          ]);
         return redirect()->route('dashboard.john-reserve.show', $johnReserve);
    }


    public function show(JohnReserve $johnReserve)
    {
         return view('dashboard.john-reserves.show', compact('johnReserve'));
    }


    public function edit(JohnReserve $johnReserve)
    {
         return view('dashboard.john-reserves._edit', compact('johnReserve'));
    }


    public function update(JohnReserveRequest $request, JohnReserve $johnReserve)
    {
         $image = $request->file('hero_image');
         $imageName = $johnReserve->hero_image;
         if($image){
               $imageName = renameImageFileUpload($image);
               Storage::delete("public/uploads/$johnReserve->hero_image");
               $image->storeAs('public/uploads/john-reserve', $imageName);
               $imageName =  "john-reserve/$imageName";
         }
         $johnReserve->update([
              'title'       => $request->input('title'),
              'slug'        => Str::slug($request->input('title')),
              'description' => $request->input('description'),
              'hero_image'  => $imageName,
              'umami'       => number_format((float)$request->input('umami'),1),
              'saltiness'   => number_format((float)$request->input('saltiness'),1),
              'texture'     => number_format((float)$request->input('texture'),1),
              'finish'      => number_format((float)$request->input('finish'),1),
              'is_active'   => $request->input('is_active', false),
         ]);
         return redirect()->route('dashboard.john-reserve.show', $johnReserve);
    }


    public function destroy(JohnReserve $johnReserve)
    {
         $this->johnReserveService->delete($johnReserve);
         return response()->json([
              'message' => 'John Reserve Successfully Deleted',
         ]);
    }
}
