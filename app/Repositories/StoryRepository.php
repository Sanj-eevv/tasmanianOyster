<?php
declare(strict_types = 1);

namespace App\Repositories;


use App\Interfaces\StoryRepositoryInterface;
use App\Models\Story;

class StoryRepository extends BaseRepository implements StoryRepositoryInterface
{

    public function __construct(Story $model)
    {
        parent::__construct($model);
    }

     public function paginatedWithQuery(array $meta, $query = null ): array
     {
          $query = $this->model::query()
               ->select('id', 'year', 'title', 'created_at')
               ->where('id', 'like', $meta['search'] . '%')
               ->orWhere('year', 'like', $meta['search'] . '%')
               ->orWhere('title', 'like', $meta['search'] . '%')
               ->orWhere('created_at', 'like', $meta['search'] . '%');

          return $this->offsetAndSort($meta, $query);
     }


}
