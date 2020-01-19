<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class InternalGenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aktivis_name = array(
            "Adam Reynanda",
            "Adella Gravita",
            "Alfita Putrimasi Hintarsyah",
            "Andre Christian Prasetyo",
            "Andrew Kristianto Robert",
            "Andrew Nikko",
            "Atyanta Awesa",
            "Aurel Sondakh",
            "Benny Kharisma",
            "Billie Christianto",
            "Brandon",
            "Brilyan Nathanael R",
            "Cakra Buana",
            "Carissa Christie",
            "Carlos Martius",
            "Chris Jericho",
            "Christopher sean",
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
            "Muhammad Zidane Nahla",
            "Nabilla Driesandia Azarine",
            "Nico Steven",
            "Philips",
            "Phillips Tionathan",
            "Raymond Tiandinatan",
            "Rendy Septian Lie",
            "Riksen Setiawan",
            "Yohanes Romario Putra Susjaya",
            "Sendo",
            "Severian W",
            "Shane Wibowo",
            "Stanly",
            "Steven Felizio",
            "Syarief Kamal",
            "Taufiqurrahman zahruddin sutomo",
            "Toni",
            "Vincent Prisco",
            "Wellson Leewando",
            "William"
        );

        $isDekat = array(
         0,
         1,
         1,
         0,
         0,
         0,
         1,
         1,
        0,
        1,
        0,
        0,
        1,
        1,
        0,
        0,
        1,
        0,
        1,
        1,
        1,
        1,
        0,
        0,
        0,
        1,
        0,
        1,
        1,
        1,
        0,
        0,
        0,
        0,
        1,
        1,
        1,
        0,
        1,
        0,
        1,
        0,
        1,
        1,
        0,
        1,
        1,
        1,
        0,
        1,
        0,
        0,
        0,
        1,
        1,
        1,
        1,
        0,
        0,
        1,
        1,
        1,
        0,
        1
        );

    //for checking custom
        // $banyakcustom = 0;
        // for($i = 0 ; $i < count($isDekat); $i++){
        //     if($isDekat[$i] != 0){
        //         $banyakcustom++;
        //     }else{
        //         continue;
        //     }
        // }
        // dd($banyakcustom);
    //end
            $sapaan = array(
                'Selamat dah jadi aktivis yaa, ',
                'Makasih dah buka suratku yaa, ',
                'Dibaca yaa :) ',
                'Gimana kabarmu? aman" aja kan wkwkwk. '
            );

            $transisi = array(
                'mungkin untuk sekarang kita masih jarang ngobrol nih ',
                'semoga beberapa kata ini dapat menyemangatimu ',
                'untuk waktu yang sesingkat ini ',
                'ini cuma beberapa bagian dari isi pikiranku kok '
            );

            $harapan = array(
                'aku harap kamu merasa cocok di BNCC ya. ',
                'ku harap kita kedepannya bisa lebih banyak ngomong lagi atau sama-sama kerja la ' ,
                'saya harap untuk kedepannya apa yang diharapkan dapat tercapai ',
                'Semoga untuk kedepannya semua dapat berjalan sesuai harapan ya wkwkwk '
            );

            $motivasi = array(
                'tetap ingat yang namanya aktivis harus tetap aktif ya semangat terus jalani BNCCnya :)',
                'ku yakin kok kalian orang terpilih pasti bisa jalani BNCC sampai akhir. Semangat yaaa!',
                'Ingat aja perjuanganmu dari masuk aktvis sampai sekarang ini aku yakin kamu pasti bisa kok sampai di akhir :) , ~goodluck yee~ ',
                'semangat ya dalam menjalani perjalanan ini sorry kalau selama ini aku ada salah ya ;) Semangat! '
            );

        for($i = 0 ;$i < count($aktivis_name);$i++){
            $randsapaan = $sapaan[rand(0,3)];
            $randtransisi = $transisi[rand(0,3)];
            $randharapan = $harapan[rand(0,3)];
            $randmotivasi = $motivasi[rand(0,3)];

            $motivation = $randsapaan.$randtransisi.$randharapan.$randmotivasi;
            $name = $aktivis_name[$i];
            $token = Str::random(7);
            $namenospace = str_replace(' ','_',$name);
            $qrcodePath= __DIR__.'/../../public/storage/qrcodes/'.$namenospace.'.png';
            QrCode::format('png')->size(100)->errorCorrection('H')->generate('http://sucika-delbert.herokuapp.com/scan/'.$token,$qrcodePath);

                $isClose = 0;
                if($isDekat[$i]){
                    $isClose = 1;
                    // $motivation = '';
                }else{
                    $isClose = 0;
                }

            DB::table('internals')->insert([
                'name'=> $name,
                'role'=> 'aktivis',
                'token' => $token,
                'motivation' => $motivation,
                'isClose' => $isClose,
                'qrcodePath' => '/storage/qrcodes/'.$namenospace.'.png'
            ]);
        }

    }
}
