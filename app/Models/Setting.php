<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
     protected $table = 'settings';
     protected $fillable = ['key_name', 'key_value'];

     protected array $dates = ['created_at','updated_at'];

     protected $casts = [
          'created_at' => 'datetime:m-d-Y',
          'updated_at' => 'datetime:m-d-Y',
     ];

     public static function getCachedValue(){
          return Cache::rememberForever('settings', function () {
               return Setting::query()->pluck('key_value', 'key_name')->toArray();
          });
     }

     public static function updateCachedSettingsData(){
          Cache::forget('settings');
          self::getCachedValue();
     }

}
