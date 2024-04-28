<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PeopleRequest;
use App\Interfaces\PeopleRepositoryInterface;
use App\Models\Gallery;
use App\Models\People;
use App\Services\Dashboard\PeopleService;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class PeopleController extends Controller
{
   public function __construct(protected PeopleRepositoryInterface $peopleRepository, protected PeopleService $peopleService){}

    public function index()
    {
         $viewData['allPeople'] = $this->peopleRepository->all();
         return view('dashboard.people.index')->with($viewData);
    }


    public function store(PeopleRequest $request)
    {
         try{
              $receiver = new FileReceiver("file", $request, HandlerFactory::classFromRequest($request));

              $save = $receiver->receive();

              if ($save->isFinished()) {
                   $file = $this->peopleService->saveFile($save->getFile());

                   $chunkFilePath = $save->getFile()->getPathname();
                   if (file_exists($chunkFilePath)) {
                        unlink($chunkFilePath);
                   }

                   return response()->json([
                        'id'     => $file->id,
                        'done'   => 100,
                        'status' => true
                   ]);
              }

              $handler = $save->handler();

              return response()->json([
                   "done" => $handler->getPercentageDone(),
                   'status' => true
              ]);
         }catch(\Exception $e){
              return response()->json($e->getMessage());
         }
    }

    public function destroy(People $person)
    {
         $this->peopleService->delete($person);
         return response()->json([
              'message' => 'File Successfully Deleted',
         ]);
    }
}
