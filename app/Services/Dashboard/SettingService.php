<?php
declare(strict_types = 1);

namespace App\Services\Dashboard;

use App\Interfaces\SettingRepositoryInterface;
use App\Models\Setting;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class SettingService
{
     public function __construct(protected SettingRepositoryInterface $settingRepository){}

     public function store(array $input) : void
     {
          $appLogo = self::handleLogoUpdate($input['app_logo'] ?? null);
          $this->settingRepository->upsert([
               [
                    'key_name'   => 'app_name',
                    'key_value'  => $input['app_name'],
                    'updated_at' => now()
               ],
               [
                    'key_name'   => 'company_email',
                    'key_value'  => $input['company_email'],
                    'updated_at' => now()
               ],
               [
                    'key_name'   => 'company_address',
                    'key_value'  => $input['company_address'] ?? null,
                    'updated_at' => now()
               ],
               [
                    'key_name'   => 'company_tagline',
                    'key_value'  => $input['company_tagline'] ?? null,
                    'updated_at' => now()
               ],
               [
                    'key_name'   => 'company_phone',
                    'key_value'  => $input['company_phone'] ?? null,
                    'updated_at' => now()
               ],
               [
                    'key_name'   => 'copyright_text',
                    'key_value'  => $input['copyright_text'] ?? null,
                    'updated_at' => now()
               ],
               [
                    'key_name'   => 'facebook_url',
                    'key_value'  => $input['facebook_url'] ?? null,
                    'updated_at' => now()
               ],
               [
                    'key_name'   => 'instagram_url',
                    'key_value'  => $input['instagram_url'] ?? null,
                    'updated_at' => now()
               ],
               [
                    'key_name'   => 'twitter_url',
                    'key_value'  => $input['twitter_url'] ?? null,
                    'updated_at' => now()
               ],
               [
                    'key_name'   => 'linkedin_url',
                    'key_value'  => $input['linkedin_url'] ?? null,
                    'updated_at' => now()
               ],
               [
                    'key_name'   => 'map_iframe',
                    'key_value'  => $input['map_iframe'] ?? null,
                    'updated_at' => now()
               ],
               [
                    'key_name'   => 'app_logo',
                    'key_value'  => $appLogo,
                    'updated_at' => now()
               ],
          ], ['key_name'], ['key_value', 'updated_at']);
          Setting::updateCachedSettingsData();
     }

     private function handleLogoUpdate(UploadedFile|null $newAppLogo) : string
     {
          $currentAppLogo = $this->settingRepository->get('app_logo');
          if(empty($newAppLogo)){return $currentAppLogo;}
          Storage::delete("public/uploads/$currentAppLogo");
          $imageName = renameFileUpload($newAppLogo);
          $newAppLogo->storeAs('public/uploads/settings', $imageName);
          return "settings/$imageName";
     }

}