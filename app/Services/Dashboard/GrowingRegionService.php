<?php
declare(strict_types = 1);

namespace App\Services\Dashboard;

use App\DTO\GrowingRegionDTO;
use App\Interfaces\GrowingRegionRepositoryInterface;
use App\Models\GrowingRegion;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GrowingRegionService
{
     public function __construct(protected GrowingRegionRepositoryInterface $growingRegionRepository, protected TeamService $teamService, protected GrowingRegionGalleryService
     $growingRegionGalleryService){}

     public function findBySlug(string $slug, ?string $ignore = null) : Model|Builder|null
     {
          return $this->growingRegionRepository->findBySlug(slug: $slug, ignore: $ignore);
     }

     public function find(string|int $id) : Model|Collection|Builder|array|null
     {
          return $this->growingRegionRepository->find(id: $id);
     }

     /**
      * @throws Exception
      */
     public function store(GrowingRegionDTO $growingRegionDTO) : mixed
     {
          $teamsImages = $galleries = [];
          try
          {
               DB::beginTransaction();
               $growingRegionDTO->heroImage = self::handleImageUpload(newImage: $growingRegionDTO->heroImage);
               $growingRegionDTO->heroImageSub = self::handleImageUpload(newImage: $growingRegionDTO->heroImageSub);
               $growingRegion = $this->growingRegionRepository->store(input: $growingRegionDTO->toArray());
               foreach($growingRegionDTO->teams as $teamDTO){
                    $teamsImages[] = $this->teamService->store(teamDTO: $teamDTO, growingRegion: $growingRegion)->image;
               }
               foreach($growingRegionDTO->growingRegionGalleries as $gallery){
                    $galleries[] = $this->growingRegionGalleryService->store(file: $gallery, growingRegion: $growingRegion)->file_url;
               }
               DB::commit();
          }catch( Exception $exception){
               Storage::delete(paths: ["public/uploads/$growingRegionDTO->heroImage", "public/uploads/$growingRegionDTO->heroImageSub", ...$teamsImages, ...$galleries]);
               DB::rollBack();
               throw new Exception(message: $exception->getMessage());
          }
          return $growingRegion;
     }

     /**
      * @throws Exception
      */
     public function update(GrowingRegionDTO $growingRegionDTO, GrowingRegion $growingRegion) : Model
     {
          $teamsImages = $galleries = [];
          try
          {
               DB::beginTransaction();
               $growingRegionDTO->heroImage = self::handleImageUpload(newImage: $growingRegionDTO->heroImage, currentImageName: $growingRegion->getAttribute(key: 'hero_image'));
               $growingRegionDTO->heroImageSub = self::handleImageUpload(newImage: $growingRegionDTO->heroImageSub, currentImageName: $growingRegion->getAttribute(key: 'hero_image_sub'));
               $growingRegion = $this->growingRegionRepository->update(input: $growingRegionDTO->toArray(),modelObj: $growingRegion);
               $teamIds = [];
               foreach($growingRegionDTO->teams as $teamDTO){
                    if($teamDTO->teamId){
                        $this->teamService->update(teamDTO: $teamDTO, team: $teamDTO->teamId);
                         $teamIds[] = $teamDTO->teamId;
                    }else{
                         $teamObj = $this->teamService->store(teamDTO: $teamDTO, growingRegion: $growingRegion);
                         $teamIds[] = $teamObj->id;
                         $teamsImages[] = $teamObj->image;
                    }
               }
               /** @var GrowingRegion $growingRegion */
               $toDeleteTeams = $growingRegion->teams()->whereNotIn(column: 'id', values: $teamIds)->pluck(column: 'id')->toArray();
               $this->teamService->massDelete(teamIds:$toDeleteTeams);

               foreach($growingRegionDTO->growingRegionGalleries as $gallery){
                    $galleries[] = $this->growingRegionGalleryService->store(file: $gallery, growingRegion: $growingRegion)->file_url;
               }
               DB::commit();
          }catch(Exception $exception){
               Storage::delete(paths: [...$teamsImages, ...$galleries]);
               DB::rollBack();
               throw new Exception(message: $exception->getMessage());
          }
          return $growingRegion;
     }

     public function handleImageUpload(?UploadedFile $newImage, string $currentImageName = null) : ?string
     {
          if(empty($newImage)){return $currentImageName;}

          !empty($currentImageName) && Storage::delete(paths:"public/uploads/$currentImageName");

          $imageName = renameImageFileUpload(file: $newImage);
          $newImage->storeAs(path:'public/uploads/growing-region', name: $imageName);
          return "growing-region/$imageName";
     }

     public function delete(GrowingRegion $growingRegion) : void
     {
         $growingRegion->load(relations: ['galleries', 'teams']);
         Storage::delete(paths:["public/uploads/{$growingRegion->getAttribute(key: 'hero_image')}", "public/uploads/{$growingRegion->getAttribute(key: 'hero_image_sub')}"]);
         $this->growingRegionGalleryService->massDelete(galleryIds: $growingRegion->galleries->pluck('id')->toArray());
         $this->teamService->massDelete(teamIds: $growingRegion->teams->pluck('id')->toArray());
         $this->growingRegionRepository->delete(modelObj: $growingRegion);
     }

}