<?php

namespace App\Interfaces;

interface SettingRepositoryInterface
{
    public function get($key, $default);

}
