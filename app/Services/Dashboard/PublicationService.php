<?php
declare(strict_types = 1);

namespace App\Services\Dashboard;

use App\Interfaces\PublicationRepositoryInterface;
use App\Models\Publication;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PublicationService
{
     public function __construct(protected PublicationRepositoryInterface $publicationRepository){}

     public function find(string|int $id) : Model|Collection|Builder|array|null
     {
          return $this->publicationRepository->find(id: $id);
     }

     public function all() : Collection
     {
          return $this->publicationRepository->all();
     }

     public function store(array $input) : mixed
     {
          $input['file_name'] = $input['file_url']->getClientOriginalName();
          $input['file_url'] = self::handleFileUpload(newFile: $input['file_url']);
          return $this->publicationRepository->store(input: $input);
     }

     public function update(array $input, Publication $publication) : Model
     {
          $input['file_name'] = !empty($input['file_url']) ? $input['file_url']->getClientOriginalName() : $publication->getAttribute(key: 'file_name');
          $input['file_url'] = self::handleFileUpload(newFile: $input['file_url'] ?? null, currentFileName: $publication->getAttribute(key: 'file_url'));
          return $this->publicationRepository->update(input: $input, modelObj: $publication);
     }

     public function handleFileUpload(?UploadedFile $newFile, string $currentFileName = null) : ?string
     {
          if(empty($newFile)){return $currentFileName;}

          !empty($currentFileName) && Storage::delete(paths: "public/uploads/$currentFileName");

          $fileName = renameFileUpload(file: $newFile);
          $newFile->storeAs(path: 'public/uploads/publication', name: $fileName);
          return "publication/$fileName";
     }

     public function delete(Publication $publication) : void
     {
         Storage::delete(paths: "public/uploads/{$publication->getAttribute(key: 'file')}");
         $this->publicationRepository->delete(modelObj: $publication);
     }

}