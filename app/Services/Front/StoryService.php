<?php
declare(strict_types = 1);

namespace App\Services\Front;

use App\Interfaces\StoryRepositoryInterface;

class StoryService
{
     public function __construct(protected StoryRepositoryInterface $storyRepository){}

     public function all() : mixed
     {
         return $this->storyRepository->all();
     }

}