<?php
declare(strict_types = 1);

namespace App\Services\Dashboard;

use App\Interfaces\PeopleRepositoryInterface;
use App\Models\People;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PeopleService
{
     public function __construct(protected PeopleRepositoryInterface $peopleRepository){}

     public function saveFile(UploadedFile $file)
     {
          $extension = $file->getClientOriginalExtension();
          $uniqId = uniqid();
          $file->storeAs('public/uploads/people', "$uniqId.$extension");
          return $this->peopleRepository->store([
               'file_name'      => $file->getClientOriginalName(),
               'file_extension' => $file->getClientOriginalExtension(),
               'file_url'       => "people/$uniqId.$extension",
               'file_size'      => $file->getSize(),
          ]);
     }

     public function delete(People $person) : void{
          Storage::delete("public/uploads/{$person->getAttribute('file_url')}");
          $this->peopleRepository->delete($person);
     }

}