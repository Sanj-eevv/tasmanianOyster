<?php
declare(strict_types = 1);

namespace App\Repositories;


use App\Interfaces\GrowingRegionRepositoryInterface;
use App\Models\GrowingRegion;

class GrowingRegionRepository extends BaseRepository implements GrowingRegionRepositoryInterface
{

    public function __construct(GrowingRegion $model)
    {
        parent::__construct($model);
    }

     public function paginatedWithQuery(array $meta, $query = null ): array
     {
          $query = $this->model::query()
               ->select(columns: ['id', 'title', 'hero_image', 'hero_image_sub', 'slug', 'created_at'])
               ->where(column: 'id', operator: 'like', value: $meta['search'] . '%')
               ->orWhere(column: 'title', operator: 'like', value: $meta['search'] . '%')
               ->orWhere(column: 'created_at', operator: 'like', value: $meta['search'] . '%');

          return $this->offsetAndSort(meta: $meta, query: $query);
     }


}
