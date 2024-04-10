<?php
declare(strict_types = 1);

namespace App\Services\Front;

use App\Interfaces\JohnReserveRepositoryInterface;
use App\Interfaces\StoryRepositoryInterface;
use App\Models\JohnReserve;
use Illuminate\Support\Facades\Storage;

class JohnReserveService
{
     public function __construct(protected JohnReserveRepositoryInterface $johnReserveRepository){}

     public function delete(JohnReserve $johnReserve) : mixed
     {
         Storage::delete("public/uploads/$johnReserve->hero_image");
         return $this->johnReserveRepository->delete($johnReserve);
     }

}