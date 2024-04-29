<?php
declare(strict_types = 1);

namespace App\Services\Dashboard;

use App\Interfaces\BoardExecutiveRepositoryInterface;
use App\Models\BoardExecutive;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class BoardExecutiveService
{
     public function __construct(protected BoardExecutiveRepositoryInterface $boardExecutiveRepository){}

     public function find(string|int $id) : Model|Collection|Builder|array|null
     {
          return $this->boardExecutiveRepository->find(id: $id);
     }

     public function store(array $input) : mixed
     {
          $input['image'] = self::handleImageUpload(newImage: $input['image']);
          return $this->boardExecutiveRepository->store(input: $input);
     }

     public function update(array $input, BoardExecutive $boardExecutive) : Model
     {
          $input['image'] = self::handleImageUpload(newImage: $input['image'] ?? null, currentImageName: $boardExecutive->getAttribute(key: 'image'));
          return $this->boardExecutiveRepository->update(input: $input, modelObj: $boardExecutive);
     }

     public function handleImageUpload(?UploadedFile $newImage, string $currentImageName = null) : ?string
     {
          if(empty($newImage)){return $currentImageName;}

          !empty($currentImageName) && Storage::delete(paths:"public/uploads/$currentImageName");

          $imageName = renameImageFileUpload(file: $newImage);
          $newImage->storeAs(path:'public/uploads/board-executive', name: $imageName);
          return "board-executive/$imageName";
     }

     public function delete(BoardExecutive $boardExecutive) : void
     {
         Storage::delete(paths: "public/uploads/{$boardExecutive->getAttribute(key: 'image')}");
         $this->boardExecutiveRepository->delete(modelObj: $boardExecutive);
     }

}