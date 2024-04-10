<?php
declare(strict_types = 1);

namespace App\Interfaces;

interface SettingRepositoryInterface
{
    public function get($key, $default);

}
