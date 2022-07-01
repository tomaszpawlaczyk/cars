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
            $data[]=["vin"=> $faker->numberBetween(10,20),"description"=> $faker->text,"color"=>$faker->colorName(),"price"=>$faker->randomNumber,"brand_id"=>null, "model_id"=> $faker->numberBetween(1,10)];
        }
        DB::table("cars")->insert($data);
    }
}
