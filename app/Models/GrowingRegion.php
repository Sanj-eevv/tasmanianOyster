<?php
declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class GrowingRegion extends Model
{
     protected $fillable = [
          'title',
          'slug',
          'subtitle',
          'description',
          'characteristics',
          'tasting_note',
          'hero_image',
          'hero_image_sub',
          'is_active'
     ];

     protected function casts(): array
     {
          return [
               'is_active' => 'boolean',
          ];
     }
}
