<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{

    public function run(): void
    {
         Setting::query()->upsert([
              [
                   'key_name'   => 'app_name',
                   'key_value'  => config('app.name'),
                   'created_at' => now(),
                   'updated_at' => now()
              ],
              [
                   'key_name'   => 'company_email',
                   'key_value'  => 'company@example.com',
                   'created_at' => now(),
                   'updated_at' => now()
              ],
              [
                   'key_name'   => 'company_address',
                   'key_value'  => 'NSW, Australia',
                   'created_at' => now(),
                   'updated_at' => now()
              ],
              [
                   'key_name'   => 'company_phone',
                   'key_value'  => '(02) 9737 9644',
                   'created_at' => now(),
                   'updated_at' => now()
              ],
              [
                   'key_name'   => 'company_tagline',
                   'key_value'  => 'Inspection of Wisdom',
                   'created_at' => now(),
                   'updated_at' => now()
              ],
              [
                   'key_name'   => 'copyright_text',
                   'key_value'  => 'JuiceOn Shrestha Co',
                   'created_at' => now(),
                   'updated_at' => now()
              ],
              [
                   'key_name'   => 'facebook_url',
                   'key_value'  => 'https://www.facebook.com',
                   'created_at' => now(),
                   'updated_at' => now()
              ],
              [
                   'key_name'   => 'instagram_url',
                   'key_value'  => 'https://www.instagram.com',
                   'created_at' => now(),
                   'updated_at' => now()
              ],
              [
                   'key_name'   => 'twitter_url',
                   'key_value'  => 'https://www.twitter.com',
                   'created_at' => now(),
                   'updated_at' => now()
              ],
              [
                   'key_name'   => 'linkedin_url',
                   'key_value'  => 'https://www.linkedin.com',
                   'created_at' => now(),
                   'updated_at' => now()
              ],
              [
                   'key_name'   => 'map_iframe',
                   'key_value'  => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.133118029559!2d152.95824207427543!3d-26.83571801659772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9384b3394378fb%3A0x912d04a1146aed33!2sAustralia%20Zoo!5e0!3m2!1sen!2snp!4v1712027166858!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                   'created_at' => now(),
                   'updated_at' => now()
              ],
              [
                   'key_name'   => 'app_logo',
                   'key_value'  => 'logo.webp',
                   'created_at' => now(),
                   'updated_at' => now()
              ],
         ], ['key_name'], ['key_value', 'created_at', 'updated_at']);
    }
}
