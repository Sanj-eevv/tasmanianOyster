<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
     protected $fillable = [
          'file_name',
          'file_extension',
          'file_url',
          'file_size'
     ];

}
