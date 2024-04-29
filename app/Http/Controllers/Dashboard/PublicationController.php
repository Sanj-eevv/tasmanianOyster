<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PublicationRequest;
use App\Http\Resources\Publication\PublicationResource;
use App\Interfaces\PublicationRepositoryInterface;
use App\Models\Publication;
use App\Services\Dashboard\PublicationService;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function __construct(protected PublicationRepositoryInterface $publicationRepository, protected PublicationService $publicationService){}

    public function index(Request $request)
    {
         if ($request->ajax()) {
              $columns = [
                   'id',
                   'name',
                   'type',
                   'created_at',
              ];
              $meta = AppHelper::defaultTableInput([
                   'offset' => $request->input('start'),
                   'limit'  => $request->input('length') ?? '-1',
                   'order'  => $columns[$request->input('order.0.column')] ?? $columns[0],
                   'dir'    => $request->input('order.0.dir'),
                   'search' => $request->input('search.value'),
              ]);
              $resp = $this->publicationRepository->paginatedWithQuery($meta);
              $resp['data'] = PublicationResource::collection($resp['data']);
              $resp['draw'] = intval($request->input('draw'));
              return response()->json($resp);
         }
         return view('dashboard.publications.index');
    }


    public function create()
    {
         $publication = new Publication();
         return view('dashboard.publications._create',compact('publication'));
    }

    public function store(PublicationRequest $request)
    {
         $publication = $this->publicationService->store($request->validated());
         return redirect()->route('dashboard.publications.show', $publication);
    }


    public function show(Publication $publication)
    {
         return view('dashboard.publications.show', compact('publication'));

    }


    public function edit(Publication $publication)
    {
         return view('dashboard.publications._edit', compact('publication'));

    }


    public function update(PublicationRequest $request, Publication $publication)
    {
         $publication = $this->publicationService->update($request->validated(), $publication);
         return redirect()->route('dashboard.publications.show', $publication);
    }


    public function destroy(Publication $publication)
    {
         $this->publicationService->delete($publication);
         return response()->json([
              'message' => 'Publication Successfully Deleted',
         ]);
    }
}
