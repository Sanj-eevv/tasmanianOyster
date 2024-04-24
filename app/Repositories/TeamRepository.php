<?php
declare(strict_types = 1);

namespace App\Repositories;


use App\Interfaces\TeamRepositoryInterface;
use App\Models\Team;

class TeamRepository extends BaseRepository implements TeamRepositoryInterface
{

    public function __construct(Team $model)
    {
        parent::__construct($model);
    }

}
