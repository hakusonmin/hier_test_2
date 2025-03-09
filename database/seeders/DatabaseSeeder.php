<?php

namespace Database\Seeders;

use App\Models\SkuOption;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    $this->call([
      AdminSeeder::class,
      UserSeeder::class,
      CategorySeeder::class,
      ProductSeeder::class,
      SkuSeeder::class,
      OptionSeeder::class,
      SkuOptionSeeder::class,
    ]);
    }
}
