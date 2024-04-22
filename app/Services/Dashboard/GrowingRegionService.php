<?php
declare(strict_types = 1);

namespace App\Services\Dashboard;

use App\Interfaces\GrowingRegionRepositoryInterface;
use App\Models\GrowingRegion;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class GrowingRegionService
{
     public function __construct(protected GrowingRegionRepositoryInterface $growingRegionRepository){}

     public function findBySlug(string $slug, ?string $ignore = null) : Model|Builder|null
     {
          return $this->growingRegionRepository->findBySlug($slug, $ignore);
     }

     public function find(string|int $id) : Model|Collection|Builder|array|null
     {
          return $this->growingRegionRepository->find($id);
     }

     public function store(array $input) : mixed
     {
          $input['hero_image'] = self::handleImageUpload($input['hero_image']);
          $input['hero_image_sub'] = self::handleImageUpload($input['hero_image_sub']);
          return $this->growingRegionRepository->store($input);
     }

     public function update(array $input, GrowingRegion $growingRegion) : Model
     {
          $input['hero_image'] = self::handleImageUpload($input['hero_image'] ?? null, $growingRegion->getAttribute('hero_image'));
          $input['hero_image_sub'] = self::handleImageUpload($input['hero_image_sub'] ?? null, $growingRegion->getAttribute('hero_image_sub'));
          return $this->growingRegionRepository->update($input,$growingRegion);
     }

     public function handleImageUpload(?UploadedFile $newImage, string $currentImageName = null) : ?string
     {
          if(empty($newImage)){return $currentImageName;}

          !empty($currentImageName) && Storage::delete("public/uploads/$currentImageName");

          $imageName = renameImageFileUpload($newImage);
          $newImage->storeAs('public/uploads/growing-region', $imageName);
          return "growing-region/$imageName";
     }

     public function delete(GrowingRegion $growingRegion) : void
     {
         Storage::delete("public/uploads/{$growingRegion->getAttribute('hero_image')}");
         $this->growingRegionRepository->delete($growingRegion);
     }

}