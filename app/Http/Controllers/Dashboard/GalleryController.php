<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\GalleryRequest;
use App\Interfaces\GalleryRepositoryInterface;
use App\Models\Gallery;
use App\Services\Dashboard\GalleryService;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class GalleryController extends Controller
{
   public function __construct(protected GalleryRepositoryInterface $galleryRepository, protected GalleryService $galleryService){}

    public function index()
    {
         $viewData['allFiles'] = $this->galleryRepository->all();
         return view('dashboard.galleries.index')->with($viewData);
    }


    public function store(GalleryRequest $request)
    {
         try{
              $receiver = new FileReceiver("file", $request, HandlerFactory::classFromRequest($request));

              $save = $receiver->receive();

              if ($save->isFinished()) {
                   $file = $this->galleryService->saveFile($save->getFile());

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

    public function destroy(Gallery $gallery)
    {
         $this->galleryService->delete($gallery);
         return response()->json([
              'message' => 'File Successfully Deleted',
         ]);
    }
}
