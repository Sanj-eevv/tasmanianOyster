<?php

namespace App\Providers;

use App\Interfaces\BaseRepositoryInterface;
use App\Interfaces\ContactRepositoryInterface;
use App\Interfaces\SettingRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Repositories\ContactRepository;
use App\Repositories\SettingRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
         $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
         $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);

    }
}
