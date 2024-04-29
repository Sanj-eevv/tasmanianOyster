<?php
declare(strict_types = 1);
namespace Database\Seeders;

use App\Models\BoardExecutive;
use Illuminate\Database\Seeder;

class BoardExecutiveSeeder extends Seeder
{
    public function run(): void
    {
         BoardExecutive::query()->insert([
              [
                   'name'        => 'ALEXANDER (SANDY) BEARD',
                   'role'        => 'CHAIRMAN',
                   'description' => 'B COM, MAICD, FCA Former CEO of ASX listed CVC Ltd. Chairman of ASX listed Hancock & Gore Limited, FOS Capital Ltd and Anagenics Limited. Director of ASX listed Centrepoint Alliance Limited.',
                   'image'       => 'board-executive/board-executive-1.png',
                   'created_at'  => now(),
                   'updated_at'  => now(),
              ],
              [
                   'name'        => 'JONATHON POKE',
                   'role'        => 'DIRECTOR',
                   'description' => 'MAICD Director Eyre Shellfish Pty Ltd. Oyster grower since 1979 and past Chairman Tasmanian Shellfish Executive Council 2012–2014.',
                   'image'       => 'board-executive/board-executive-2.png',
                   'created_at'  => now(),
                   'updated_at'  => now(),
              ],[
                   'name'        => 'ANTHONY JOHNSTON',
                   'role'        => 'DIRECTOR',
                   'description' => 'MAICD, B.AG.EC Various industry roles including former Chairman, Abalone Association of Australasia Inc. and Sales Manager Tasmanian Seafoods. 34 years in Primary Industry and fisheries.',
                   'image'       => 'board-executive/board-executive-3.png',
                   'created_at'  => now(),
                   'updated_at'  => now(),
              ],[
                   'name'        => 'JAMES HAWSON',
                   'role'        => 'DIRECTOR',
                   'description' => 'B.COM, FCPA Former Principal at Crowe Horwath, Board member Tax Practitioners Board. 35 years providing financial and management assistance to Oyster Farming businesses across Australia.',
                   'image'       => 'board-executive/board-executive-4.png',
                   'created_at'  => now(),
                   'updated_at'  => now(),
              ],[
                   'name'        => 'JANELLE CASHIN',
                   'role'        => 'DIRECTOR',
                   'description' => 'B.AS GAICD Director Hewitt Cattle Australia and Sunpork Group. Former CEO of Fairglen Farms and COO of the Inghams Group.',
                   'image'       => 'board-executive/board-executive-5.jpg',
                   'created_at'  => now(),
                   'updated_at'  => now(),
              ],[
                   'name'        => 'PATRICK TASKUNAS',
                   'role'        => 'Chief Executive Officer',
                   'description' => '',
                   'image'       => 'board-executive/board-executive-6.png',
                   'created_at'  => now(),
                   'updated_at'  => now(),
              ],[
                   'name'        => 'JOSHUA POKE',
                   'role'        => 'Executive GM - Operations',
                   'description' => '',
                   'image'       => 'board-executive/board-executive-7.png',
                   'created_at'  => now(),
                   'updated_at'  => now(),
              ],
              [
                   'name'        => 'SARAH BRIDGES',
                   'role'        => 'People, Culture and Safety Manager',
                   'description' => '',
                   'image'       => 'board-executive/board-executive-8.jpeg',
                   'created_at'  => now(),
                   'updated_at'  => now(),
              ],
         ]);
    }
}
