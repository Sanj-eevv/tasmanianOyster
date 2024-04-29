<?php
declare(strict_types = 1);

namespace App\Providers;

use App\Interfaces\BaseRepositoryInterface;
use App\Interfaces\BoardExecutiveRepositoryInterface;
use App\Interfaces\ContactRepositoryInterface;
use App\Interfaces\GalleryRepositoryInterface;
use App\Interfaces\GrowingRegionGalleryRepositoryInterface;
use App\Interfaces\GrowingRegionRepositoryInterface;
use App\Interfaces\JohnReserveRepositoryInterface;
use App\Interfaces\PeopleRepositoryInterface;
use App\Interfaces\PublicationRepositoryInterface;
use App\Interfaces\SettingRepositoryInterface;
use App\Interfaces\StoryRepositoryInterface;
use App\Interfaces\TeamRepositoryInterface;
use App\Models\GrowingRegion;
use App\Repositories\BaseRepository;
use App\Repositories\BoardExecutiveRepository;
use App\Repositories\ContactRepository;
use App\Repositories\GalleryRepository;
use App\Repositories\GrowingRegionGalleryRepository;
use App\Repositories\GrowingRegionRepository;
use App\Repositories\JohnReserveRepository;
use App\Repositories\PeopleRepository;
use App\Repositories\PublicationRepository;
use App\Repositories\SettingRepository;
use App\Repositories\StoryRepository;
use App\Repositories\TeamRepository;
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
         $this->app->bind(BoardExecutiveRepositoryInterface::class, BoardExecutiveRepository::class);
         $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
         $this->app->bind(GalleryRepositoryInterface::class, GalleryRepository::class);
         $this->app->bind(GrowingRegionRepositoryInterface::class, GrowingRegionRepository::class);
         $this->app->bind(GrowingRegionGalleryRepositoryInterface::class, GrowingRegionGalleryRepository::class);
         $this->app->bind(JohnReserveRepositoryInterface::class, JohnReserveRepository::class);
         $this->app->bind(PeopleRepositoryInterface::class, PeopleRepository::class);
         $this->app->bind(PublicationRepositoryInterface::class, PublicationRepository::class);
         $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);
         $this->app->bind(StoryRepositoryInterface::class, StoryRepository::class);
         $this->app->bind(TeamRepositoryInterface::class, TeamRepository::class);


    }
}
