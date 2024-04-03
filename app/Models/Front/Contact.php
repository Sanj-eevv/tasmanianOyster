<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $table = 'contacts';
     protected $fillable = ['full_name', 'phone_number', 'email', 'referral_source', 'message'];

     protected array $dates = ['created_at','updated_at'];

     protected $casts = [
          'created_at' => 'datetime:m-d-Y',
          'updated_at' => 'datetime:m-d-Y',
     ];
}