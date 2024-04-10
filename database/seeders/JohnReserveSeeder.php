<?php
declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\JohnReserve;
use Illuminate\Database\Seeder;

class JohnReserveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JohnReserve::query()->upsert([
             [
                  'title'       => 'Boomer Bay',
                  'slug'        => 'boomer-bay',
                  'description' => 'A very mild level of saltiness leads into a very sweet finish on the front of the palate in the Boomer Bay oyster. A little bitterness on the back of the palate is balanced by the sweetness in the front, combining to deliver a lovely umami balance in the first few seconds of tasting this oyster. With a gentle silky smooth texture, the Boomer Bay oysters reveal a mildly earthy and organic finish with melons, seaweed and crunchy green cucumber.',
                  'hero_image'  => 'john-reserve/boomer-bay.webp',
                  'umami'       => 4.1,
                  'saltiness'   => 2.6,
                  'texture'     => 4.2,
                  'finish'      => 2.1,
                  'is_active'   => true,
             ],
             [
                  'title'       => 'Duck Bay',
                  'slug'        => 'duck-bay',
                  'description' => 'desc',
                  'hero_image'  => 'john-reserve/duck-bay.webp',
                  'umami'       => 3.9,
                  'saltiness'   => 3.7,
                  'texture'     => 4.1,
                  'finish'      => 2.4,
                  'is_active'   => true,
             ],
             [
                  'title'       => 'Pipeclay Lagoon',
                  'slug'        => 'pipeclay-lagoon',
                  'description' => 'desc',
                  'hero_image'  => 'john-reserve/pipeclay-lagoon.webp',
                  'umami'       => 4.1,
                  'saltiness'   => 2.6,
                  'texture'     => 4.2,
                  'finish'      => 2.1,
                  'is_active'   => true,
             ],
             [
                  'title'       => 'Pittwater',
                  'slug'        => 'pittwater',
                  'description' => 'desc',
                  'hero_image'  => 'john-reserve/boomer-bay.webp',
                  'umami'       => 4.1,
                  'saltiness'   => 2.6,
                  'texture'     => 4.2,
                  'finish'      => 2.1,
                  'is_active'   => true,
             ],
             [
                  'title'       => 'Exclusive Suppliers',
                  'slug'        => 'exclusive-suppliers',
                  'description' => 'desc',
                  'hero_image'  => 'john-reserve/boomer-bay.webp',
                  'umami'       => 4.1,
                  'saltiness'   => 2.6,
                  'texture'     => 4.2,
                  'finish'      => 2.1,
                  'is_active'   => true,
             ]
        ], ['slug'], ['title', 'description', 'hero_image', 'umami', 'saltiness', 'texture', 'finish', 'is_active']);
    }
}
