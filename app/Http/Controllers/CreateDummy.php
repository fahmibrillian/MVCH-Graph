<?php

namespace App\Http\Controllers;

use Faker\Factory;

use App\User;

use Illuminate\Http\Request;

class CreateDummy extends Controller
{
    public function generate(){
        $faker = Factory::create('id_ID');
        for ($i=0; $i < 100; $i++) {
            $user = new User;
            $user->uuid = $faker->uuid;
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->save();
        }
    }
}
