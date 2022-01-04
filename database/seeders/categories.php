<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\categoriesM;
class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categoriesM::create(array(
            "name"=>"Burger"  ,


           ));

           categoriesM::create(array(
            "name"=>"Drinks"  ,

           ));

           categoriesM::create(array(
            "name"=>"Deserts"  ,

           ));


           categoriesM::create(array(
            "name"=>"Basta"  ,

           ));

           categoriesM::create(array(
            "name"=>"Pizza"  ,

           ));
    }
}
