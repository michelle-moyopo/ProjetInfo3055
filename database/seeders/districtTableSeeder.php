<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class districtTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("districts")->insert([
            ["region_id"=>"1","name"=>"AA","deleted_at"=>"null"],
            ["region_id"=>"2","name"=>"BB","deleted_at"=>"null"],
            ["region_id"=>"3","name"=>"CC","deleted_at"=>"null"],
            ["region_id"=>"4","name"=>"DD","deleted_at"=>"null"],
            ["region_id"=>"5","name"=>"EE","deleted_at"=>"null"],
            ["region_id"=>"6","name"=>"FF","deleted_at"=>"null"],
            ["region_id"=>"7","name"=>"GG","deleted_at"=>"null"],
            ["region_id"=>"8","name"=>"HH","deleted_at"=>"null"],
        ]);
    }
}
