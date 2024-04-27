<?php
declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\GrowingRegion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GrowingRegionSeeder extends Seeder
{

    public function run(): void
    {
         GrowingRegion::query()->upsert([
              [
                   'title'           => 'Pipeclay Lagoon Hatchery',
                   'slug'            =>  Str::slug('Pipeclay Lagoon Hatchery'),
                   'subtitle'        => 'The Tasmanian Oyster Co. hatchery',
                   'description'     => '<p>Trading as Shellfish Culture Ltd., was founded as a co-operative in 1979 by the early pioneers of the Tasmanian pacific oyster industry.</p>
<p>In the 40 plus year history, the company has matured into a confident unlisted public company, with shareholders comprising of a mix of aquaculture producers and private investors.</p>
<p>Our professional hatchery staff are all highly trained and multi-skilled technicians who are dedicated to producing the highest quality shellfish seed in the world</p>',
                   'characteristics' => null,
                   'tasting_note'    => null,
                   'hero_image'      => 'growing-region/growing-region-1.jpeg',
                   'hero_image_sub'  => 'growing-region/growing-region-sub-1.jpeg',
                   'is_active'       => 1,
              ],
              [
                   'title'           => 'Boomer Bay',
                   'slug'            =>  Str::slug('Boomer Bay'),
                   'subtitle'        => 'Boomer Bay (Dunalley)',
                   'description'     => 'Heading south-east of Hobart towards Port Arthur you will discover some of Tasmanian\'s most pristine white beaches. Here, tucked behind Dunalley, our Boomer Bay leases lie hidden. With direct access to the crystal clear, pure oceanic waters of the Pacific Ocean, our oysters thrive.',
                   'characteristics' => 'An opaque thick white shell is consistent with this area. The growth rate of oysters from this farm in Tasmania is 18-24 months to reach market size.',
                   'tasting_note'    => 'A very mild level of saltiness leads into a very sweet coming through on the front of the palate in the Boomer Bay oyster. A little bitterness on the back of the palate is balanced by the sweetness in the front, combining to deliver a lovely umami balance in the first few seconds of tasting this oyster. With a gentle silky smooth texture, the Boomer Bay oysters reveal a mildly earthy & organic finish with melons, seaweed & crunchy green cucumber.',
                   'hero_image'      => 'growing-region/growing-region-2.webp',
                   'hero_image_sub'  => 'growing-region/growing-region-sub-2.jpeg',
                   'is_active'       => 1,
              ],
              [
                   'title'           => 'Duck Bay',
                   'slug'            =>  Str::slug('Duck Bay'),
                   'subtitle'        => 'Duck Bay (Smithton)',
                   'description'     => '<p>Duck Bay is situated in the far north-west of Tasmania. It is the home of Tarkine Fresh Oysters.</p>
<p><a href="http://www.tarkinefreshoysters.com.au" target="_blank" rel="noopener"> www.tarkinefreshoysters.com.au</a></p>',
                   'characteristics' => '<p>An opaque thick white shell is consistent with this area. The growth rate of oysters from this farm in Tasmania is 24-26 months to reach market size.</p>',
                   'tasting_note'    => '<p>Immediately there is a pronounced saltiness on the front of the palate resulting from the huge water exchange of Bass Strait through the farm. This is immediately followed by a lingering sweetness and organic, earthy umami with flavours of seagrass, crunchy melon &amp; cucumber finishing out the taste experience. Smithton oysters typically have a very pleasing resistance and soft squeakiness to the bite which moves quickly through to a luxuriously silky, smooth and clean texture.</p>',
                   'hero_image'      => 'growing-region/growing-region-3.jpeg',
                   'hero_image_sub'  => 'growing-region/growing-region-sub-3.jpeg',
                   'is_active'       => 1,
              ],
              [
                   'title'           => 'Pipeclay Lagoon',
                   'slug'            =>  Str::slug('Pipeclay Lagoon'),
                   'subtitle'        => 'Pipeclay Lagoon',
                   'description'     => 'Neighbouring Clifton Beach is a treasured gem for all Tasmanians. Surf waves, which start their journey from Antarctica, are a favourite playground and Pipeclay Lagoon is lucky to receive these same fresh, clean waters directly from the Southern Ocean. It makes a perfect place to grow our happy, healthy oysters.',
                   'characteristics' => 'While being a mere 30 minutes south of Hobart, Pipeclay Lagoon is an isolated gem ideal for growing full, plump oysters. Our hatchery, Shellfish Culture is also located on the shores of the Lagoon.',
                   'tasting_note'    => 'A moderate saltiness begins the taste experience for the Pipe Clay Lagoon oyster and is followed quickly with a short burst of sweetness before evolving to a soft granite/slate & organic umami with a clear, bright seaweed, spinach & faint melon finish. Typically Pipe Clay oysters exhibit mild resistance & soft squeakiness to the tooth before moving through to a satiny, silkiness of texture that rounds out the experience.',
                   'hero_image'      => 'growing-region/growing-region-4.jpeg',
                   'hero_image_sub'  => 'growing-region/growing-region-sub-4.jpeg',
                   'is_active'       => 1,
              ],
              [
                   'title'           => 'Pittwater',
                   'slug'            =>  Str::slug('Pittwater'),
                   'subtitle'        => 'Pittwater',
                   'description'     => 'Tucked away in a peaceful bay behind Five Mile Beach in Tasmania\'s south east, the Pittwater catchment is well-established, growing the first Pacific Oysters in Australia in 1946.',
                   'characteristics' => 'Oysters from Pittwater have their annual spawning earlier than other oyster farms in Tasmania and normally peak in condition between August and January. Good numbers of non-spawning triploid oysters have also been sown down, enabling production year-round.',
                   'tasting_note'    => 'A very mild level of saltiness contrasts distinctly with the high-level of sweetness coming through on the front of the palate in the Pittwater oyster. An almost indiscernible bitterness balances the sweetness in the mouth; combining to deliver a lovely umami balance in the first few seconds of tasting this oyster. With a pliant softness and tenderness, the texture is smooth and silky with a mildly earthy & organic finish with hints of green melons, seagrass & cucumber.',
                   'hero_image'      => 'growing-region/growing-region-5.jpeg',
                   'hero_image_sub'  => 'growing-region/growing-region-sub-5.jpeg',
                   'is_active'       => 1,
              ],
              [
                   'title'           => 'Little Swanport',
                   'slug'            =>  Str::slug('Little Swanport'),
                   'subtitle'        => 'Little Swanport',
                   'description'     => '<p>Little Swanport is our Nursery site.</p>
<p>The farm is renowned for its highly productive nursery water. With an ideal mix of fresh estuary water and clean oceanic waters directly from the East Coast of Tasmania.</p>',
                   'characteristics' => null,
                   'tasting_note'    => null,
                   'hero_image'      => 'growing-region/growing-region-6.png',
                   'hero_image_sub'  => 'growing-region/growing-region-sub-6.jpeg',
                   'is_active'       => 1,
              ],
         ], ['title', 'slug'], ['subtitle', 'description', 'characteristics', 'tasting_note', 'hero_image', 'hero_image_sub', 'is_active']);
    }
}
