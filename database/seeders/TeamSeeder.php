<?php
declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\GrowingRegion;
use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
     public function run(): void
    {
         $growingRegions = GrowingRegion::query()->pluck('id', 'slug')->toArray();
         $pipeClayLagoonHatchery = $growingRegions['pipeclay-lagoon-hatchery'];
         $boomerBay = $growingRegions['boomer-bay'];
         $duckBay = $growingRegions['duck-bay'];
         $pipeClayLagoon = $growingRegions['pipeclay-lagoon'];
         $litterSwanPort = $growingRegions['little-swanport'];


         Team::query()->insert([
               [
                    'growing_region_id' => $pipeClayLagoonHatchery,
                    'name'              => 'SCOTT MACTIER',
                    'role'              => 'Senior Manager Breeding & R&D',
                    'image'             => 'growing-region/team/team-1.webp',
                    'created_at'        => now(),
                    'updated_at'        => now(),
               ],
               [
                    'growing_region_id' => $pipeClayLagoonHatchery,
                    'name'              => 'ANNA OVERWETER',
                    'role'              => 'Hatchery Manager',
                    'image'             => 'growing-region/team/team-2.webp',
                    'created_at'        => now(),
                    'updated_at'        => now(),
               ],
              [
                   'growing_region_id' => $boomerBay,
                   'name'              => 'Luke Daly',
                   'role'              => 'Acting Team Leader',
                   'image'             => 'growing-region/team/team-3.jpeg',
                   'created_at'        => now(),
                   'updated_at'        => now(),
              ],
              [
                   'growing_region_id' => $boomerBay,
                   'name'              => 'NIC CASEY',
                   'role'              => 'Acting Regional Manager',
                   'image'             => 'growing-region/team/team-4.jpeg',
                   'created_at'        => now(),
                   'updated_at'        => now(),
              ],
              [
                   'growing_region_id' => $boomerBay,
                   'name'              => 'ALAN PRESTAGE',
                   'role'              => 'Team Leader',
                   'image'             => 'growing-region/team/team-5.png',
                   'created_at'        => now(),
                   'updated_at'        => now(),
              ],
              [
                   'growing_region_id' => $duckBay,
                   'name'              => 'JARRAD POKE',
                   'role'              => 'Regional Manager',
                   'image'             => 'growing-region/team/team-6.jpeg',
                   'created_at'        => now(),
                   'updated_at'        => now(),
              ],
              [
                   'growing_region_id' => $duckBay,
                   'name'              => 'DANIEL GRAINGER',
                   'role'              => 'Assistant Regional Manager',
                   'image'             => 'growing-region/team/team-7.jpeg',
                   'created_at'        => now(),
                   'updated_at'        => now(),
              ],
              [
                   'growing_region_id' => $duckBay,
                   'name'              => 'JAI WILLMOT',
                   'role'              => 'Team Leader',
                   'image'             => 'growing-region/team/team-8.jpeg',
                   'created_at'        => now(),
                   'updated_at'        => now(),
              ],
              [
                   'growing_region_id' => $duckBay,
                   'name'              => 'JASON HADLEY',
                   'role'              => 'Team Leader',
                   'image'             => 'growing-region/team/team-9.png',
                   'created_at'        => now(),
                   'updated_at'        => now(),
              ],
              [
                   'growing_region_id' => $pipeClayLagoon,
                   'name'              => 'MICHAEL RILEY',
                   'role'              => 'Regional Manager',
                   'image'             => 'growing-region/team/team-10.jpeg',
                   'created_at'        => now(),
                   'updated_at'        => now(),
              ],
              [
                   'growing_region_id' => $pipeClayLagoon,
                   'name'              => 'RILEY BATCHELOR',
                   'role'              => 'Team Leader',
                   'image'             => 'growing-region/team/team-11.jpeg',
                   'created_at'        => now(),
                   'updated_at'        => now(),
              ],
              [
                   'growing_region_id' => $pipeClayLagoon,
                   'name'              => 'ALANA JACKMAN',
                   'role'              => 'Team Leader',
                   'image'             => 'growing-region/team/team-12.jpeg',
                   'created_at'        => now(),
                   'updated_at'        => now(),
              ],
              [
                   'growing_region_id' => $litterSwanPort,
                   'name'              => 'MICHAEL RILEY',
                   'role'              => 'Regional Manager',
                   'image'             => 'growing-region/team/team-13.jpeg',
                   'created_at'        => now(),
                   'updated_at'        => now(),
              ],
              [
                   'growing_region_id' => $litterSwanPort,
                   'name'              => 'MAL GRAHAM',
                   'role'              => 'Team Leader',
                   'image'             => 'growing-region/team/team-14.jpeg',
                   'created_at'        => now(),
                   'updated_at'        => now(),
              ],
          ]);
    }
}
