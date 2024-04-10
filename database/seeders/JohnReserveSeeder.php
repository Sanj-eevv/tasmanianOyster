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
                  'hero_image'  => 'john-reserve/boomer-bay.jpeg',
                  'umami'       => 4.1,
                  'saltiness'   => 2.6,
                  'texture'     => 4.2,
                  'finish'      => 2.1,
                  'is_active'   => true,
             ],
             [
                  'title'       => 'Duck Bay',
                  'slug'        => 'duck-bay',
                  'description' => 'Immediately there is a pronounced saltiness on the front of the palate resulting from the huge water exchange of Bass Strait through the farm. This is immediately experienced by a lingering sweetness and organic, earthy umami with flavours of seagrass, crunchy melon & cucumber finishing out the taste experience. Smithton oysters typically have a very pleasing resistance and soft squeakiness to the bite which moves quickly through a luxuriously silky, smooth and clean texture.',
                  'hero_image'  => 'john-reserve/duck-bay.jpeg',
                  'umami'       => 3.9,
                  'saltiness'   => 3.7,
                  'texture'     => 4.1,
                  'finish'      => 2.4,
                  'is_active'   => true,
             ],
             [
                  'title'       => 'Pipeclay Lagoon',
                  'slug'        => 'pipeclay-lagoon',
                  'description' => 'A moderate saltiness begins the taste experience for the Pipeclay Lagoon oyster and is followed quickly with a short burst of sweetness before evolving to a soft granite/slate and organic umami with a clear, bright seaweed, spinach and faint melon finish. Typically, Pipeclay oysters exhibit mild resistance and soft squeakiness to the tooth before moving through to a satiny, silkiness of texture that rounds out the experience.',
                  'hero_image'  => 'john-reserve/pipeclay-lagoon.jpeg',
                  'umami'       => 3.7,
                  'saltiness'   => 3.0,
                  'texture'     => 3.5,
                  'finish'      => 2.1,
                  'is_active'   => true,
             ],
             [
                  'title'       => 'Pittwater',
                  'slug'        => 'pittwater',
                  'description' => 'A very mild level of saltiness contrasts distinctly with the high-level of sweetness coming through on the front of the palate in the Pittwater oyster. An almost indiscernible bitterness balances the sweetness in the mouth; combining to deliver a full umami experience in the first few seconds of tasting this oyster. With a pliant softness and tenderness, the texture is smooth and silky with a mildly earthy and organic finish with hints of green melons, seagrass and cucumber.',
                  'hero_image'  => 'john-reserve/pittwater.jpg',
                  'umami'       => 4.0,
                  'saltiness'   => 2.6,
                  'texture'     => 3.8,
                  'finish'      => 2.3,
                  'is_active'   => true,
             ],
        ], ['slug'], ['title', 'description', 'hero_image', 'umami', 'saltiness', 'texture', 'finish', 'is_active']);
    }
}
