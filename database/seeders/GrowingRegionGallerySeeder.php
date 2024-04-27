<?php
declare( strict_types = 1 );

namespace Database\Seeders;

use App\Models\GrowingRegion;
use App\Models\GrowingRegionGallery;
use Illuminate\Database\Seeder;

class GrowingRegionGallerySeeder extends Seeder
{

     /**
      * Run the database seeds.
      */
     public function run() : void
     {

          $growingRegions = GrowingRegion::query()->pluck('id', 'slug')->toArray();
          $boomerBay = $growingRegions['boomer-bay'];
          $duckBay = $growingRegions['duck-bay'];
          $pipeClayLagoon = $growingRegions['pipeclay-lagoon'];
          $pittWater = $growingRegions['pittwater'];
          $litterSwanPort = $growingRegions['little-swanport'];


          GrowingRegionGallery::query()->insert([
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-1.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-1.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-2.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-2.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-3.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-3.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-4.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-4.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-5.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-5.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-6.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-6.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-7.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-7.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-8.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-8.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-9.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-9.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-10.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-10.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-11.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-11.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-12.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-12.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-13.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-13.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-14.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-14.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-15.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-15.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-16.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-16.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $boomerBay,
                    'file_name'         => 'gallery-17.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-17.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $duckBay,
                    'file_name'         => 'gallery-18.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-18.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $duckBay,
                    'file_name'         => 'gallery-19.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-19.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $duckBay,
                    'file_name'         => 'gallery-20.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-20.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $duckBay,
                    'file_name'         => 'gallery-21.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-21.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $duckBay,
                    'file_name'         => 'gallery-22.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-22.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $duckBay,
                    'file_name'         => 'gallery-23.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-23.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-24.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-24.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-25.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-25.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-26.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-26.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-27.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-27.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-28.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-28.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-29.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-29.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-30.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-30.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-31.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-31.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-32.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-32.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-33.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-33.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-34.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-34.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-35.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-35.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-36.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-36.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-37.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-37.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-38.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-38.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-39.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-39.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-40.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-40.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-41.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-41.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-42.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-42.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-43.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-43.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-44.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-44.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-45.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-45.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-46.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-46.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-47.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-47.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pipeClayLagoon,
                    'file_name'         => 'gallery-48.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-48.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pittWater,
                    'file_name'         => 'gallery-49.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-49.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pittWater,
                    'file_name'         => 'gallery-50.jpeg',
                    'file_extension'    => 'jpeg',
                    'file_url'          => 'growing-region/gallery/gallery-50.jpeg',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pittWater,
                    'file_name'         => 'gallery-51.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-51.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $pittWater,
                    'file_name'         => 'gallery-52.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-52.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $litterSwanPort,
                    'file_name'         => 'gallery-53.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-53.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $litterSwanPort,
                    'file_name'         => 'gallery-54.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-54.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $litterSwanPort,
                    'file_name'         => 'gallery-55.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-55.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $litterSwanPort,
                    'file_name'         => 'gallery-56.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-56.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $litterSwanPort,
                    'file_name'         => 'gallery-57.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-57.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],
               [
                    'growing_region_id' => $litterSwanPort,
                    'file_name'         => 'gallery-58.webp',
                    'file_extension'    => 'webp',
                    'file_url'          => 'growing-region/gallery/gallery-58.webp',
                    'created_at'        => now(),
                    'updated_at'        => now()
               ],

          ]);
     }

}
