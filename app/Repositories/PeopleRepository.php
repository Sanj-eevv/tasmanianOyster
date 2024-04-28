<?php
declare(strict_types = 1);

namespace App\Repositories;


use App\Interfaces\PeopleRepositoryInterface;
use App\Models\People;

class PeopleRepository extends BaseRepository implements PeopleRepositoryInterface
{
    public function __construct(People $model)
    {
        parent::__construct($model);
    }

}
