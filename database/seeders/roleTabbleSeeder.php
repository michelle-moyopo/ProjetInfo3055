<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class roleTabbleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            ["name"=>"admin"],
            ["name"=>"direction"],
            ["name"=>"responsable"],
            ["name"=>"gestionnaire"],
            ["name"=>"user"],
        ]);
    }
}
