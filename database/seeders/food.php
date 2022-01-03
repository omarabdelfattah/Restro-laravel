<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\foodM;

class food extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       foodM::create(array(
        "name"=>"desert"  ,
        "image"=>"IMG_20220102_202812.jpg",
        "price"=>"65",
        "description"=>" ",
        "isoffer"=>false ,
        "cat_id"=>3
       ));

       foodM::create(array(
        "name"=>"margeritta"  ,
        "image"=>"7.jpeg",
        "price"=>"70",
        "description"=>"",
        "isoffer"=>false ,
        "cat_id"=>5
       ));

       foodM::create(array(
        "name"=>"mix burger"  ,
        "image"=>"5.jpeg",
        "price"=>"80",
        "description"=>"with double layer of burger and crispy",
        "isoffer"=>true,
        "cat_id"=>1
       ));

       foodM::create(array(
        "name"=>"basta"  ,
        "image"=>"8.jpeg",
        "price"=>"25",
        "description"=>"",
        "isoffer"=>false ,
        "cat_id"=>4

    ));
       foodM::create(array(
        "name"=>"ice coffiee"  ,
        "image"=>"coffee.jpg",
        "price"=>"50",
        "description"=>"",
        "isoffer"=>false ,
        "cat_id"=>2
       ));



       foodM::create(array(
        "name"=>"dessert"  ,
        "image"=>"IMG_20220102_202812.jpg",
        "price"=>"65",
        "description"=>" ",
        "isoffer"=>false ,
        "cat_id"=>3
       ));

       foodM::create(array(
        "name"=>"margeritta"  ,
        "image"=>"7.jpeg",
        "price"=>"70",
        "description"=>"",
        "isoffer"=>false ,
        "cat_id"=>5
       ));

       foodM::create(array(
        "name"=>"mix burger"  ,
        "image"=>"5.jpeg",
        "price"=>"80",
        "description"=>"with double layer of burger and crispy",
        "isoffer"=>true,
        "cat_id"=>1
       ));

       foodM::create(array(
        "name"=>"Pasta margrieta"  ,
        "image"=>"8.jpeg",
        "price"=>"25",
        "description"=>"",
        "isoffer"=>false ,
        "cat_id"=>4

    ));
       foodM::create(array(
        "name"=>"coffee"  ,
        "image"=>"coffee.jpg",
        "price"=>"50",
        "description"=>"",
        "isoffer"=>false ,
        "cat_id"=>2
       ));

       foodM::create(array(
        "name"=>"cappuccino",
        "image"=>"coffee.jpg",
        "price"=>"50",
        "description"=>"",
        "isoffer"=>false ,
        "cat_id"=>2
       ));

    }
}
