<?php
declare(strict_types = 1);

namespace App\Repositories;


use App\Interfaces\PublicationRepositoryInterface;
use App\Models\Publication;

class PublicationRepository extends BaseRepository implements PublicationRepositoryInterface
{

    public function __construct(Publication $model)
    {
        parent::__construct($model);
    }

     public function paginatedWithQuery(array $meta, $query = null ): array
     {
          $query = $this->model::query()
               ->select('id', 'name', 'type', 'created_at')
               ->where('id', 'like', $meta['search'] . '%')
               ->orWhere('name', 'like', $meta['search'] . '%')
               ->orWhere('type', 'like', $meta['search'] . '%')
               ->orWhere('created_at', 'like', $meta['search'] . '%');

          return $this->offsetAndSort($meta, $query);
     }


}
