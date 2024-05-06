<?php
declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
     protected $table = 'orders';

     protected $fillable = ['email', 'quantity', 'description', 'john_reserve_id'];

     public function johnReserve() : BelongsTo
     {
          return $this->belongsTo(JohnReserve::class);
     }
}
