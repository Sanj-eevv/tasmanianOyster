<?php
declare(strict_types = 1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
         $this->call([
              UserSeeder::class,
              SettingSeeder::class,
              StorySeeder::class,
              JohnReserveSeeder::class,
              GallerySeeder::class,
              GrowingRegionSeeder::class,
              TeamSeeder::class,
              GrowingRegionGallerySeeder::class,
         ]);
    }
}
