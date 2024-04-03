<?php

namespace App\Helpers;

use App\Models\Vote;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class AppHelper
{
     public static function defaultTableInput(array $input) : array
     {
          $offset = $input['offset'] ?? 1;
          $limit = $input['limit'] ?? 50;
          $order = $input['order'] ?? 'created_at';
          $dir = $input['dir'] ?? 'desc';
          $search = $input['search'] ?? '';
          return [
               'order'  => $order,
               'dir'    => $dir,
               'limit'  => $limit,
               'offset' => $offset,
               'search' => $search,
          ];
     }

}
