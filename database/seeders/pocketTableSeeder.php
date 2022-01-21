<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class pocketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("blood_pockets")->insert([
            ["blood_group_id"=>"1","blood_bank_id"=>"1","serial_number"=>"1234","duree_vie"=>"2 jours"],
            ["blood_group_id"=>"2","blood_bank_id"=>"2","serial_number"=>"1235","duree_vie"=>"2 jours"],
            ["blood_group_id"=>"1","blood_bank_id"=>"1","serial_number"=>"1236","duree_vie"=>"2 jours"],
            ["blood_group_id"=>"2","blood_bank_id"=>"2","serial_number"=>"1237","duree_vie"=>"2 jours"],
        ]);
    }
}
