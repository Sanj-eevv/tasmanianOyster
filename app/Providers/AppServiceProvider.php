<?php

namespace App\Providers;

use App\Models\Setting;
use App\Observers\Dashboard\SettingObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         Schema::defaultStringLength(191);
         Model::preventLazyLoading(!$this->app->isProduction());
         if (Schema::hasTable('settings')) {
              $settings = Setting::getCachedValue();
              if($settings){
                   config([
                        'app.name'                     => $settings['app_name'] ?? null,
                        'app.settings.company_email'   => $settings['company_email'] ?? null,
                        'app.settings.company_address' => $settings['company_address'] ?? null,
                        'app.settings.company_phone'   => $settings['company_phone'] ?? null,
                        'app.settings.company_tagline' => $settings['company_tagline'] ?? null,
                        'app.settings.copyright_text'  => $settings['copyright_text'] ?? null,
                        'app.settings.facebook_url'    => $settings['facebook_url'] ?? null,
                        'app.settings.instagram_url'   => $settings['instagram_url'] ?? null,
                        'app.settings.twitter_url'     => $settings['twitter_url'] ?? null,
                        'app.settings.linkedin_url'    => $settings['linkedin_url'] ?? null,
                        'app.settings.map_iframe'      => $settings['map_iframe'] ?? null,
                        'app.settings.app_logo'        => $settings['app_logo'] ?? null,
                   ]);
              }
         }
         Setting::observe(SettingObserver::class);
    }
}
