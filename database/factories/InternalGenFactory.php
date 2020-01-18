<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Internal;
use Faker\Generator as Faker;

$factory->define(Internal::class, function (Faker $faker) {

    $aktivis_name = [
    "Adam Reynanda Tampatty",
    "Adella Gravita",
    "Alfita Putrimasi Hintarsyah",
    "Andre Christian Prasetyo",
    "Andrew Kristianto Robert",
    "Andrew Nikko",
    "Atyanta Awesa Pambharu",
    "Aurel Theodore Sondakh",
    "Benny Kharisma",
    "Billie Christianto",
    "Brandon",
    "Brilyan Nathanael R",
    "Cakra Buana",
    "Carissa Christie",
    "Carlos Martius",
    "Chris Jericho",
    "Christopher sean hermansyah",
    "Clarence Aurelio",
    "David",
    "Dennis",
    "Edward Jayamangala Putra",
    "Felisha Miranda",
    "Geraldi Anthony",
    "hans gilbert riyanto",
    "Ignatius Dillwyn",
    "Ignatius Hansen",
    "James Bezaliel Jonathan",
    "Jason",
    "Jessica Novia",
    "Julyo",
    "Karen Natalia",
    "Kefin Hari Saputra",
    "Kemas NabilPutra Ardana",
    "Ketut Gede Yoga Wicaksana",
    "Kevin stanislaus nugraha",
    "Kurniadi",
    "Luis Frentzen Salim",
    "Mario Fredo Tannuwijaya",
    "Maryanto",
    "Michael lim",
    "Michael Wijaya",
    "Muhammad Derel Patria Ramadhan",
    "Muhammad Kharisma Azhari",
    "Muhammad Rifqi Zhafar",
    "Muhammad Zidane Nahla Qowy",
    "Nabilla Driesandia Azarine",
    "Nico Steven",
    "Philips",
    "Phillips Tionathan",
    "Raymond Tiandinatan",
    "Rendy Septian Lie",
    "Riksen Setiawan",
    "Yohanes Romario Putra Susjaya",
    "Sendo Tjiamis",
    "Severian Fathich W",
    "Shane Wibowo",
    "Stanly",
    "Steven Felizio",
    "Syarief Kamal",
    "taufiqurrahman zahruddin sutomo",
    "Toni",
    "Vincent Prisco",
    "Wellson Leewando",
    "William"
    ];

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
