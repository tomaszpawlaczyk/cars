<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory;


class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table("cars")->truncate();
        $faker=Factory::create();
        $data=[];
        for($i=0;$i<30;$i++){
            $data[]=["vin"=> $faker->numberBetween(100,1000),"description"=> $faker->text,"color"=>$faker->colorName(),"price"=>$faker->numberBetween(1000,10000),"brand_id"=>$faker->numberBetween(1,10), "model_id"=> $faker->numberBetween(1,20)];
        }
        DB::table("cars")->insert($data);
    }
}
