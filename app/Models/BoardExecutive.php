<?php
declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardExecutive extends Model
{
     protected $fillable = [
          'name',
          'role',
          'image',
          'description'
     ];

}
