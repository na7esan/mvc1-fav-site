<?php

namespace Database\Seeders;

use App\Models\FavoriteSite;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        FavoriteSite::factory(50)->create();
    }
}
