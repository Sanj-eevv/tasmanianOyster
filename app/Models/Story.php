<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Story extends Model
{
    use Notifiable;
    protected $fillable = [
        'year',
        'title',
        'description',
    ];
}
