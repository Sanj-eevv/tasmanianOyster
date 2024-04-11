<?php
declare(strict_types = 1);

namespace App\Services\Front;

use App\Interfaces\JohnReserveRepositoryInterface;
use App\Interfaces\StoryRepositoryInterface;
use App\Models\JohnReserve;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class JohnReserveService
{
     public function __construct(protected JohnReserveRepositoryInterface $johnReserveRepository){}

     public function store(array $input) : mixed
     {
          $input['hero_image'] = self::handleImageUpload($input['hero_image']);
          return $this->johnReserveRepository->store($input);
     }

     public function update(array $input, JohnReserve $johnReserve) : Model
     {
          $input['hero_image'] = self::handleImageUpload($input['hero_image'] ?? null, $johnReserve->getAttribute('hero_image'));
          return $this->johnReserveRepository->update($input,$johnReserve);
     }

     public function handleImageUpload(?UploadedFile $newImage, string $currentImageName = null) : ?string
     {
          if(empty($newImage)){return $currentImageName;}

          !empty($currentImageName) && Storage::delete("public/uploads/$currentImageName");

          $imageName = renameImageFileUpload($newImage);
          $newImage->storeAs('public/uploads/john-reserve', $imageName);
          return "john-reserve/$imageName";
     }

     public function delete(JohnReserve $johnReserve) : void
     {
         Storage::delete("public/uploads/$johnReserve->hero_image");
         $this->johnReserveRepository->delete($johnReserve);
         JohnReserve::updateCachedValue();
     }

}