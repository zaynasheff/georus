<?php

namespace Zaynasheff\Georus\Database\Seeders;

use Database\Seeders\RegionsCitiesSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RegionsCitiesSeeder::class
        ]);
    }
}
