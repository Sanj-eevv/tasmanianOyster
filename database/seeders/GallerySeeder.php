<?php
declare(strict_types = 1);

namespace Database\Seeders;

use App\Interfaces\GalleryRepositoryInterface;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class GallerySeeder extends Seeder
{
    public function __construct(protected GalleryRepositoryInterface $galleryRepository){}
    public function run(): void
    {
         $allFiles = File::files('storage/app/public/uploads/gallery');
         foreach($allFiles as $file){
              $mimeType = mime_content_type($file->getPathname());
              if (!str_starts_with($mimeType, 'image/')) {
                  continue;
              }

              $fileName = $file->getFilename();
              $this->galleryRepository->store([
                   'file_name'      => $fileName,
                   'file_extension' => $file->getExtension(),
                   'file_url'       => "gallery/$fileName",
                   'file_size'      => $file->getSize(),
              ]);

         }
    }
}
