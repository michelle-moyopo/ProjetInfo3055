<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class regionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("regions")->insert([
            ["name"=>"Centre"],
            ["name"=>"Nord"],
            ["name"=>"Ouset"],
            ["name"=>"SUD"],
            ["name"=>"Sud-ouest"],
            ["name"=>"Nord-ouest"],
            ["name"=>"Est"],
            ["name"=>"Extreme-Nord"],
        ]);
    }
}
