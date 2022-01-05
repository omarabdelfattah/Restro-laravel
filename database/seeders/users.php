<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'name'     => 'Omar Abdelfattah',
            'email'    => 'omar@omar.com',
            'password' => bcrypt(1234),
            'location'    => 'el shatby',
            'phone'    => '0123456789',
            'credit_card'    => '4535346546',
            'gender'    => 0,
        ));
        User::create(array(
            'name'     => 'Ahmed',
            'email'    => 'ahmed@ahmed.com',
            'password' => bcrypt(1234),
            'location'    => 'el raml',
            'phone'    => '01048274674',
            'credit_card'    => '5465645656',
            'gender'    => 1,
        ));
    }
}
