<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class bloodbankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("blood_banks")->insert([
            ["district_id"=>"1","responsable_id"=>"3","gestionnaire_id"=>"4","fosas_name"=>"etoug","contact"=>"asp","enabled"=>"1"],
            ["district_id"=>"2","responsable_id"=>"3","gestionnaire_id"=>"4","fosas_name"=>"ekounou","contact"=>"aspe","enabled"=>"1"],
            ["district_id"=>"3","responsable_id"=>"3","gestionnaire_id"=>"4","fosas_name"=>"kodengui","contact"=>"aspee","enabled"=>"1"],
            ["district_id"=>"4","responsable_id"=>"3","gestionnaire_id"=>"4","fosas_name"=>"odza","contact"=>"asps","enabled"=>"1"],
        ]);
    }
}
