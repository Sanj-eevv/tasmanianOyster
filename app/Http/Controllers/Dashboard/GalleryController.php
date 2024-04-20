<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\GalleryRequest;
use App\Http\Requests\Dashboard\JohnReserveRequest;
use App\Http\Resources\JohnReserve\JohnReserveResource;
use App\Interfaces\GalleryRepositoryInterface;
use App\Interfaces\JohnReserveRepositoryInterface;
use App\Models\Gallery;
use App\Models\JohnReserve;
use App\Models\Story;
use App\Services\Dashboard\GalleryService;
use App\Services\Front\JohnReserveService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
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
