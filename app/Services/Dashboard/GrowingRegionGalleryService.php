<?php
declare(strict_types = 1);

namespace App\Services\Dashboard;

use App\Interfaces\GrowingRegionGalleryRepositoryInterface;
use App\Models\GrowingRegion;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class GrowingRegionGalleryService
{
     public function __construct(protected GrowingRegionGalleryRepositoryInterface $growingRegionGalleryRepository){}

     public function store(UploadedFile $file, GrowingRegion $growingRegion)
     {
          $extension = $file->getClientOriginalExtension();
          $uniqId = uniqid();
          $file->storeAs(path: 'public/uploads/growing-region/gallery', name:"$uniqId.$extension");
          return $this->growingRegionGalleryRepository->store(input: [
               'growing_region_id' => $growingRegion->getAttribute('id'),
               'file_name'         => $file->getClientOriginalName(),
               'file_extension'    => $file->getClientOriginalExtension(),
               'file_url'          => "growing-region/gallery/$uniqId.$extension",
               'file_size'         => $file->getSize(),
          ]);
     }

     public function massDelete(array $galleryIds) : void
     {
          $galleries = $this->growingRegionGalleryRepository->modelQuery()->whereIn(column: 'id', values: $galleryIds)->get();
          foreach($galleries as $imageGallery) {
               Storage::delete(paths:"public/uploads/{$imageGallery->file_url}");
               $this->growingRegionGalleryRepository->delete(modelObj: $imageGallery);
          }
     }

}