<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\BoardExecutiveRequest;
use App\Http\Resources\BoardExecutive\BoardExecutiveResource;
use App\Interfaces\BoardExecutiveRepositoryInterface;
use App\Models\BoardExecutive;
use App\Services\Dashboard\BoardExecutiveService;
use Illuminate\Http\Request;

class BoardExecutiveController extends Controller
{
     public function __construct(protected BoardExecutiveRepositoryInterface $boardExecutiveRepository, protected BoardExecutiveService $boardExecutiveService){}

     public function index(Request $request)
    {
         if ($request->ajax()) {
              $columns = [
                   'id',
                   'name',
                   'role',
                   'image',
                   'created_at',
              ];
              $meta = AppHelper::defaultTableInput([
                   'offset' => $request->input('start'),
                   'limit'  => $request->input('length') ?? '-1',
                   'order'  => $columns[$request->input('order.0.column')] ?? $columns[0],
                   'dir'    => $request->input('order.0.dir'),
                   'search' => $request->input('search.value'),
              ]);
              $resp = $this->boardExecutiveRepository->paginatedWithQuery($meta);
              $resp['data'] = BoardExecutiveResource::collection($resp['data']);
              $resp['draw'] = intval($request->input('draw'));
              return response()->json($resp);
         }
         return view('dashboard.board-executives.index');
    }


    public function create()
    {
         $boardExecutive = new BoardExecutive();
         return view('dashboard.board-executives._create',compact('boardExecutive'));
    }


    public function store(BoardExecutiveRequest $request)
    {
         $boardExecutive = $this->boardExecutiveService->store($request->validated());
         return redirect()->route('dashboard.board-executives.show', $boardExecutive);
    }


    public function show(BoardExecutive $boardExecutive)
    {
         return view('dashboard.board-executives.show', compact('boardExecutive'));
    }


    public function edit(BoardExecutive $boardExecutive)
    {
         return view('dashboard.board-executives._edit', compact('boardExecutive'));
    }


    public function update(BoardExecutiveRequest $request, BoardExecutive $boardExecutive)
    {
         $boardExecutive = $this->boardExecutiveService->update($request->validated(), $boardExecutive);
         return redirect()->route('dashboard.board-executives.show', $boardExecutive);
    }


    public function destroy(BoardExecutive $boardExecutive)
    {
         $this->boardExecutiveService->delete($boardExecutive);
         return response()->json([
              'message' => 'Board & Executive Successfully Deleted',
         ]);
    }
}
