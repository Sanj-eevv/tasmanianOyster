<?php
declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\Story;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Story::query()->upsert(
              [
                   [
                        'year'        => '1979',
                        'title'       => 'Shellfish Culture',
                        'description' => "Shellfish Culture was set up after a small meeting of oyster farmers in a chicken shed at Lenah Valley, in Southern Tasmania. Our first hatchery was established at The Gulch, Bicheno on the East Coast of Tasmania.",
                   ],
                   [
                        'year'        => '1980',
                        'title'       => 'First oyster',
                        'description' => 'First oyster spat produced in March 1980',
                   ],
                   [
                        'year'        => '1983',
                        'title'       => 'First commercial nursery',
                        'description' => 'First commercial nursery built at Pipeclay Lagoon, Tasmania',
                   ],
                   [
                        'year'        => '1989',
                        'title'       => 'Shellfish culture',
                        'description' => 'Shellfish Culture became an unlisted public company',
                   ],
                   [
                        'year'        => '1992',
                        'title'       => 'Hatchery',
                        'description' => 'Hatchery achieves 50 million spat sales.',
                   ],
                   [
                        'year'        => '1998',
                        'title'       => 'New hatchery',
                        'description' => 'New hatchery & nursery constructed on current site at Pipeclay Lagoon',
                   ],
                   [
                        'year'        => '2005',
                        'title'       => 'Successful commercial',
                        'description' => 'Successful commercial breeding of Scallops, Mussels & Abalone',
                   ],
                   [
                        'year'        => '2007',
                        'title'       => 'Hatchery achieves',
                        'description' => 'Hatchery achieves 100+ million spat sales',
                   ],
                   [
                        'year'        => '2010',
                        'title'       => 'Commercial spat',
                        'description' => 'Commercial spat sales in Singapore, Japan & Vietnam',
                   ],
                   [
                        'year'        => '2015',
                        'title'       => 'Record spat',
                        'description' => 'Record spat sales achieved by the company',
                   ],
                   [
                        'year'        => '2019',
                        'title'       => 'SCL integrates',
                        'description' => 'SCL integrates with Tasmanian Oyster Co. & commences sales of mature oysters to the consumer market',
                   ],
                   [
                        'year'        => '2020',
                        'title'       => 'Completed',
                        'description' => 'Completed the transformational Poke acquisition, doubling the farming footprint to more than 220ha of pristine Tasmanian water.',
                   ],
                   [
                        'year'        => '2021',
                        'title'       => 'Achieved',
                        'description' => 'Achieved a strong group operating profit of $3.5M and added more than 40 people to the organisation.',
                   ],
                   [
                        'year'        => '2022',
                        'title'       => 'Produced',
                        'description' => 'Produced and sold a milestone 1M dozen mature oysters, and expanded our footprint in SA via the acquisition of our Coffin Bay Hatchery. ',
                   ],
              ],
              ['year'],
              ['title', 'description']);
    }
}
