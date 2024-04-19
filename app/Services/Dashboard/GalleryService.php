<?php
declare(strict_types = 1);

namespace App\Services\Dashboard;

use App\Interfaces\GalleryRepositoryInterface;
use App\Models\Gallery;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class GalleryService
{
     public function __construct(protected GalleryRepositoryInterface $galleryRepository){}

     public function saveFile(UploadedFile $file)
     {
          $extension = $file->getClientOriginalExtension();
          $uniqId = uniqid();
          $file->storeAs('public/uploads/gallery', "$uniqId.$extension");
          return $this->galleryRepository->store([
               'file_name'      => $file->getClientOriginalName(),
               'file_extension' => $file->getClientOriginalExtension(),
               'file_url'       => "gallery/$uniqId.$extension",
               'file_size'      => $file->getSize(),
          ]);
     }

     public function delete(Gallery $gallery) : void{
          Storage::delete("public/uploads/{$gallery->getAttribute('file_url')}");
          $this->galleryRepository->delete($gallery);
     }

}