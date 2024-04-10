<?php
declare(strict_types = 1);

namespace App\Repositories;


use App\Interfaces\JohnReserveRepositoryInterface;
use App\Models\JohnReserve;

class JohnReserveRepository extends BaseRepository implements JohnReserveRepositoryInterface
{

    public function __construct(JohnReserve $model)
    {
        parent::__construct($model);
    }

     public function paginatedWithQuery(array $meta, $query = null ): array
     {
          $query = $this->model::query()
               ->select('id', 'title', 'slug', 'created_at')
               ->where('id', 'like', $meta['search'] . '%')
               ->orWhere('title', 'like', $meta['search'] . '%')
               ->orWhere('created_at', 'like', $meta['search'] . '%');

          return $this->offsetAndSort($meta, $query);
     }


}
