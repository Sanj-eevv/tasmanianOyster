<?php
declare(strict_types = 1);

namespace App\Repositories;

use App\Interfaces\ContactRepositoryInterface;

use App\Interfaces\SettingRepositoryInterface;
use App\Models\Front\Contact;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SettingRepository extends BaseRepository implements SettingRepositoryInterface
{

    public function __construct(Setting $model)
    {
        parent::__construct($model);
    }

     public function get($key, $default = null)
     {
          return $this->all()->pluck('key_value','key_name')->toArray()[$key] ?? $default;
     }

}
