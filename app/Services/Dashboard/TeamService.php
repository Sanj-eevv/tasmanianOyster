<?php
declare(strict_types = 1);

namespace App\Services\Dashboard;

use App\DTO\TeamDTO;
use App\Interfaces\TeamRepositoryInterface;
use App\Models\GrowingRegion;
use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class TeamService
{
     public function __construct(protected TeamRepositoryInterface $teamRepository){}

     public function store(TeamDTO $teamDTO, GrowingRegion|Model $growingRegion){
          $imageName = self::handleImageUpload(newImage: $teamDTO->teamImage);
          return $this->teamRepository->store(input: [
               'growing_region_id' => $growingRegion->getAttribute(key:'id'),
               'name'              => $teamDTO->teamName,
               'role'              => $teamDTO->teamRole,
               'image'             => $imageName,
          ]);
     }

     public function update(TeamDTO $teamDTO, Team|string|int $team) : Model
     {
          $team = is_object(value: $team) ? $team : $this->teamRepository->find(id: $team);
          $imageName = self::handleImageUpload(newImage: $teamDTO->teamImage, currentImageName: $team->getAttribute(key: 'image'));
          return $this->teamRepository->update(input: [
               'name'              => $teamDTO->teamName,
               'role'              => $teamDTO->teamRole,
               'image'             => $imageName,
          ], modelObj: $team);
     }
     public function handleImageUpload(?UploadedFile $newImage, string $currentImageName = null) : ?string
     {
          if(empty($newImage)){return $currentImageName;}

          !empty($currentImageName) && Storage::delete(paths:"public/uploads/$currentImageName");

          $imageName = renameImageFileUpload(file: $newImage);
          $newImage->storeAs(path: 'public/uploads/growing-region/team', name: $imageName);
          return "growing-region/team/$imageName";
     }


     public function massDelete(array $teamIds) : void
     {
          $teams = $this->teamRepository->modelQuery()->whereIn(column: 'id', values: $teamIds)->get();
          foreach($teams as $team){
               Storage::delete("public/uploads/{$team->image}");
               $this->teamRepository->delete(modelObj: $team);
          }
     }

}