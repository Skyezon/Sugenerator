<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Internal;
use Faker\Generator as Faker;

$factory->define(Internal::class, function (Faker $faker) {

    

    // $name = $faker->name;
    // $token = Str::random(7);
    // $namenospace = str_replace(' ','_',$name);
    // $qrcodePath= __DIR__.'/../../public/storage/qrcodes/'.$namenospace.'.png';

    // QrCode::format('png')->size(100)->generate('127.0.0.1/'.$token,$qrcodePath);
    // return [
    //     'name'=> $name,
    //     'role'=> 'aktivis',
    //     'token' => $token,
    //     'motivation' => $faker->paragraph,
    //     'isClose' => 0,
    //     'qrcodePath' => '/storage/qrcodes/'.$namenospace.'.png'
    // ];
});
