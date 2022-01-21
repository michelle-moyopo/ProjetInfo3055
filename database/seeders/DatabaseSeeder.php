<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\regionTableSeeder;
use Database\Seeders\districtTableSeeder;
use Database\Seeders\bloodbankTableSeeder;
use Database\Seeders\groupebloodTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(roleTabbleSeeder::class);
        $this->call(userTableseeder::class);
        $this->call(regionTableSeeder::class);
        $this->call(districtTableSeeder::class);
        $this->call(bloodbankTableSeeder::class);
        $this->call(groupebloodTableSeeder::class);
        $this->call(pocketTableSeeder::class);

    }
}
