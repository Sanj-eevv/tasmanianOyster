<?php
declare(strict_types = 1);

namespace App\Services\Dashboard;

use App\Interfaces\JohnReserveRepositoryInterface;
use App\Models\JohnReserve;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class JohnReserveService
{
     public function __construct(protected JohnReserveRepositoryInterface $johnReserveRepository){}

     public function findBySlug(string $slug, ?string $ignore = null) : Model|Builder|null
     {
          return $this->johnReserveRepository->findBySlug($slug, $ignore);
     }

     public function find(string|int $id) : Model|Collection|Builder|array|null
     {
          return $this->johnReserveRepository->find($id);
     }

     public function store(array $input) : mixed
     {
          $input['hero_image'] = self::handleImageUpload($input['hero_image']);
          $johnReserve = $this->johnReserveRepository->store($input);
          JohnReserve::updateCachedValue();
          return $johnReserve;
     }

     public function update(array $input, JohnReserve $johnReserve) : Model
     {
          $input['hero_image'] = self::handleImageUpload($input['hero_image'] ?? null, $johnReserve->getAttribute('hero_image'));
          $johnReserve =  $this->johnReserveRepository->update($input,$johnReserve);
          JohnReserve::updateCachedValue();
          return $johnReserve;
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
         Storage::delete("public/uploads/{$johnReserve->getAttribute('hero_image')}");
         $this->johnReserveRepository->delete($johnReserve);
         JohnReserve::updateCachedValue();
     }

}