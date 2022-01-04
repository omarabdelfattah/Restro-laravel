<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\offersM; 
class offers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        offersM::create(array(
            "food_id"=>1  ,
            "old_price"=>65,
            "new_price"=>50
           ));
        offersM::create(array(
            "food_id"=>2  ,
            "old_price"=>70,
            "new_price"=>65
           ));
        offersM::create(array(
            "food_id"=>3  ,
            "old_price"=>80,
            "new_price"=>60
           ));
        offersM::create(array(
            "food_id"=>4  ,
            "old_price"=>25,
            "new_price"=>20
           ));
        offersM::create(array(
            "food_id"=>5  ,
            "old_price"=>50,
            "new_price"=>40
           ));
    }
}
