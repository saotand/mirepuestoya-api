<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarFamilyPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_brands')->insert([
            [
                "name"=>"",
                "image"=>NULL,
                "description"=> NULL,
            ]
        ]);
    }
}
