<?php
declare(strict_types = 1);
namespace App\Models;

use App\Enums\PublicationType;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
     protected $fillable = [
          'name',
          'type',
          'file_name',
          'file_url'
     ];

     protected function casts(): array
     {
          return [
               'type' => PublicationType::class,
          ];
     }
}
