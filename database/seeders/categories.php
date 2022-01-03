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
            "name"=>"burger"  ,


           ));

           categoriesM::create(array(
            "name"=>"drinks"  ,

           ));

           categoriesM::create(array(
            "name"=>"deserts"  ,

           ));


           categoriesM::create(array(
            "name"=>"basta"  ,

           ));

           categoriesM::create(array(
            "name"=>"pizza"  ,

           ));
    }
}
