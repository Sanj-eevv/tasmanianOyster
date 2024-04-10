<?php
declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JohnReserve extends Model
{
     protected $fillable = [
          'title',
          'slug',
          'description',
          'hero_image',
          'umami',
          'saltiness',
          'texture',
          'finish',
          'is_active'
     ];

     protected function casts(): array
     {
          return [
               'umami'     => 'float',
               'saltiness' => 'float',
               'texture'   => 'float',
               'finish'    => 'float',
               'is_active' => 'boolean',
          ];
     }

}
