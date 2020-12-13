<?php

namespace Database\Seeders;

use App\Models\GameGenre;
use Illuminate\Database\Seeder;

class GameGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GameGenre::create(['name' => 'FPS',             'description' => 'First Person Shooter']);
        GameGenre::create(['name' => 'MMORPG',          'description' => 'Massive Multiplayer Online RPG']);
        GameGenre::create(['name' => 'City Building',   'description' => '']);
        GameGenre::create(['name' => 'Strategy',        'description' => '']);
        GameGenre::create(['name' => 'Adventure',       'description' => '']);
        GameGenre::create(['name' => 'RPG',             'description' => 'Role Playing Game']);
        GameGenre::create(['name' => 'Survival',        'description' => '']);
        GameGenre::create(['name' => 'Battle Royale',   'description' => '']);
    }
}
