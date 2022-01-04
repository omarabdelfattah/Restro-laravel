<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tablesM;
class tables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        tablesM::create(array(

            'class' => 1,
            'reserved' => 0,

        ));

        tablesM::create(array(

            'class' => 1,
            'reserved' => 1,

        ));

        tablesM::create(array(

            'class' => 1,
            'reserved' => 0,

        ));

        tablesM::create(array(

            'class' => 1,
            'reserved' => 1,

        ));





        tablesM::create(array(

            'class' => 2,
            'reserved' => 0,

        ));

        tablesM::create(array(

            'class' => 2,
            'reserved' => 0,

        ));

        tablesM::create(array(

            'class' => 2,
            'reserved' => 1,

        ));

        tablesM::create(array(

            'class' => 2,
            'reserved' => 0,

        ));


        tablesM::create(array(

            'class' => 3,
            'reserved' => 0,

        ));

        tablesM::create(array(

            'class' => 3,
            'reserved' => 1,

        ));

        tablesM::create(array(

            'class' => 3,
            'reserved' => 1,

        ));

        tablesM::create(array(

            'class' => 3,
            'reserved' => 0,

        ));





        tablesM::create(array(

            'class' => 4,
            'reserved' => 0,

        ));

        tablesM::create(array(

            'class' => 4,
            'reserved' => 0,

        ));

        tablesM::create(array(

            'class' => 4,
            'reserved' => 0,

        ));

        tablesM::create(array(

            'class' => 4,
            'reserved' => 1,

        ));

    }
}
