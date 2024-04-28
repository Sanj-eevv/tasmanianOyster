<?php

namespace Database\Seeders;

use App\Interfaces\PeopleRepositoryInterface;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PeopleSeeder extends Seeder
{
     public function __construct(protected PeopleRepositoryInterface $peopleRepository){}
     public function run(): void
     {
          $allFiles = File::files('storage/app/public/uploads/people');
          foreach($allFiles as $file){
               $mimeType = mime_content_type($file->getPathname());
               if (!str_starts_with($mimeType, 'image/')) {
                    continue;
               }

               $fileName = $file->getFilename();
               $this->peopleRepository->store([
                    'file_name'      => $fileName,
                    'file_extension' => $file->getExtension(),
                    'file_url'       => "people/$fileName",
                    'file_size'      => $file->getSize(),
               ]);

          }
     }
}
