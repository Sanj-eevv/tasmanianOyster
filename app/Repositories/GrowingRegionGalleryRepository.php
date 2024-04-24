<?php
declare(strict_types = 1);

namespace App\Repositories;


use App\Interfaces\GrowingRegionGalleryRepositoryInterface;
use App\Models\GrowingRegionGallery;

class GrowingRegionGalleryRepository extends BaseRepository implements GrowingRegionGalleryRepositoryInterface
{

    public function __construct(GrowingRegionGallery $model)
    {
        parent::__construct($model);
    }


}
