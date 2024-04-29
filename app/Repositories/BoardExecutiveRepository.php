<?php
declare(strict_types = 1);

namespace App\Repositories;


use App\Interfaces\BoardExecutiveRepositoryInterface;
use App\Models\BoardExecutive;

class BoardExecutiveRepository extends BaseRepository implements BoardExecutiveRepositoryInterface
{

    public function __construct(BoardExecutive $model)
    {
        parent::__construct($model);
    }

     public function paginatedWithQuery(array $meta, $query = null ): array
     {
          $query = $this->model::query()
               ->select('id', 'name', 'role', 'image', 'created_at')
               ->where('id', 'like', $meta['search'] . '%')
               ->orWhere('name', 'like', $meta['search'] . '%')
               ->orWhere('role', 'like', $meta['search'] . '%')
               ->orWhere('created_at', 'like', $meta['search'] . '%');

          return $this->offsetAndSort($meta, $query);
     }


}
