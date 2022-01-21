<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class groupebloodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("blood_groups")->insert([
            ["name"=>"A+"],
            ["name"=>"A-"],
            ["name"=>"B+"],
            ["name"=>"B-"],
            ["name"=>"o-"],
            ["name"=>"o+"],
            ["name"=>"AB-"],
            ["name"=>"AB+"],
        ]);
    }
}
