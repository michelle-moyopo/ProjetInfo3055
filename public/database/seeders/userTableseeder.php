<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
class userTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            // ["role_id"=>'1',"name"=>"admin","telephone"=>"657515280","email"=>"admin@gmail.com","enabled"=>"1","password"=> Hash::make("usertest")],
            // ["role_id"=>'2',"name"=>"directeur","telephone"=>"650124582","email"=>"directeur@gmail.com","enabled"=>"1","password"=> Hash::make("usertest")],
            ["role_id"=>'4',"name"=>"getionnaire","telephone"=>"670124582","email"=>"getionnaire@gmail.com","enabled"=>"1","password"=> Hash::make("usertest")],

        ]);
    }
}
