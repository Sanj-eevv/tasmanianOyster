<?php
declare(strict_types = 1);

namespace App\Repositories;


use App\Interfaces\GalleryRepositoryInterface;
use App\Models\Gallery;

class GalleryRepository extends BaseRepository implements GalleryRepositoryInterface
{
    public function __construct(Gallery $model)
    {
        parent::__construct($model);
    }

}
