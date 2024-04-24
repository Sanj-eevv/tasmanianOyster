<?php
declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrowingRegionGallery extends Model
{
     protected $fillable = [
          'growing_region_id',
          'file_name',
          'file_extension',
          'file_url',
          'file_size'
     ];
}
