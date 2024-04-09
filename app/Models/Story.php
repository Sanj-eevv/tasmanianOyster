<?php
declare(strict_types  = 1);
namespace App\Models;

use App\Scopes\StoryOrderScope;
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

     protected static function boot()
     {
          parent::boot();

          static::addGlobalScope(new StoryOrderScope());
     }
}
