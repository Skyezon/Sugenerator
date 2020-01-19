<?php

use App\Internal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class InternalProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //heroku way
        $token = [ "HCWzxN9",
        "1XQJfQC",
        "ySRUlP8",
        "xECf2m3",
        "uNqSOlP",
        "tFeAkYS",
        "Efjf4Vs",
        "KimpPMD",
        "ztZPozR",
        "tGRzNJA",
        "d7nEmqg",
        "sUxqxHy",
        "CL9u4PI",
        "RE8BJ7L",
        "90lOnLo",
        "NMdhYJd",
        "gp49QLa",
        "oYSs37X",
        "1XTw4Mu",
        "jSGTf2a",
        "2NYW2rR",
        "F5ZwSw4",
        "o3yJuPt",
        "tcNkDQZ",
        "eZgiks8",
        "zkDeDRu",
        "pbXwcAr",
        "AI98KgL",
        "QLyJDSC",
        "drl243Z",
        "4L67dcD",
        "Ef8fvjn",
        "OkOwGCp",
        "0BMKBiU",
        "xkxoZxb",
        "pkHpdiB",
        "vqfVwQ2",
        "Z8ZQLlG",
        "5tntr4C",
        "FJViEG9",
        "5G5qXIG",
        "9QW2cIl",
        "2Ex0WJu",
        "SmqjDdj",
        "moVYzcs",
        "5ZTybIw",
        "MY8uPHv",
        "2T21afm",
        "D4Ahjbz",
        "EJRzinR",
        "PqLze06",
        "Eqy8zOh",
        "VGiHIhJ",
        "CRQJJPi",
        "5mTka3k",
        "gzuDbSR",
        "XNR07vD",
        "pIrQeLl",
        "mP7DC9G",
        "kNSN1bj",
        "HlWCo3y",
        "9ADiWJt",
        "klFkSRX",
        "Rkp6vFN",
    ];

    $qrcodePath = [ "/storage/qrcodes/Adam_Reynanda.png",
    "/storage/qrcodes/Adella_Gravita.png",
    "/storage/qrcodes/Alfita_Putrimasi_Hintarsyah.png",
    "/storage/qrcodes/Andre_Christian_Prasetyo.png",
    "/storage/qrcodes/Andrew_Kristianto_Robert.png",
    "/storage/qrcodes/Andrew_Nikko.png",
    "/storage/qrcodes/Atyanta_Awesa.png",
    "/storage/qrcodes/Aurel_Sondakh.png",
    "/storage/qrcodes/Benny_Kharisma.png",
    "/storage/qrcodes/Billie_Christianto.png",
    "/storage/qrcodes/Brandon.png",
    "/storage/qrcodes/Brilyan_Nathanael_R.png",
    "/storage/qrcodes/Cakra_Buana.png",
    "/storage/qrcodes/Carissa_Christie.png",
    "/storage/qrcodes/Carlos_Martius.png",
    "/storage/qrcodes/Chris_Jericho.png",
    "/storage/qrcodes/Christopher_sean.png",
    "/storage/qrcodes/Clarence_Aurelio.png",
    "/storage/qrcodes/David.png",
    "/storage/qrcodes/Dennis.png",
    "/storage/qrcodes/Edward_Jayamangala_Putra.png",
    "/storage/qrcodes/Felisha_Miranda.png",
    "/storage/qrcodes/Geraldi_Anthony.png",
    "/storage/qrcodes/hans_gilbert_riyanto.png",
    "/storage/qrcodes/Ignatius_Dillwyn.png",
    "/storage/qrcodes/Ignatius_Hansen.png",
    "/storage/qrcodes/James_Bezaliel_Jonathan.png",
    "/storage/qrcodes/Jason.png",
    "/storage/qrcodes/Jessica_Novia.png",
    "/storage/qrcodes/Julyo.png",
    "/storage/qrcodes/Karen_Natalia.png",
    "/storage/qrcodes/Kefin_Hari_Saputra.png",
    "/storage/qrcodes/Kemas_NabilPutra_Ardana.png",
    "/storage/qrcodes/Ketut_Gede_Yoga_Wicaksana.png",
    "/storage/qrcodes/Kevin_stanislaus_nugraha.png",
    "/storage/qrcodes/Kurniadi.png",
    "/storage/qrcodes/Luis_Frentzen_Salim.png",
    "/storage/qrcodes/Mario_Fredo_Tannuwijaya.png",
    "/storage/qrcodes/Maryanto.png",
    "/storage/qrcodes/Michael_lim.png",
    "/storage/qrcodes/Michael_Wijaya.png",
    "/storage/qrcodes/Muhammad_Derel_Patria_Ramadhan.png",
    "/storage/qrcodes/Muhammad_Kharisma_Azhari.png",
    "/storage/qrcodes/Muhammad_Rifqi_Zhafar.png",
    "/storage/qrcodes/Muhammad_Zidane_Nahla.png",
    "/storage/qrcodes/Nabilla_Driesandia_Azarine.png",
    "/storage/qrcodes/Nico_Steven.png",
    "/storage/qrcodes/Philips.png",
    "/storage/qrcodes/Phillips_Tionathan.png",
    "/storage/qrcodes/Raymond_Tiandinatan.png",
    "/storage/qrcodes/Rendy_Septian_Lie.png",
    "/storage/qrcodes/Riksen_Setiawan.png",
    "/storage/qrcodes/Yohanes_Romario_Putra_Susjaya.png",
    "/storage/qrcodes/Sendo.png",
    "/storage/qrcodes/Severian_W.png",
    "/storage/qrcodes/Shane_Wibowo.png",
    "/storage/qrcodes/Stanly.png",
    "/storage/qrcodes/Steven_Felizio.png",
    "/storage/qrcodes/Syarief_Kamal.png",
    "/storage/qrcodes/Taufiqurrahman_zahruddin_sutomo.png",
    "/storage/qrcodes/Toni.png",
    "/storage/qrcodes/Vincent_Prisco.png",
    "/storage/qrcodes/Wellson_Leewando.png",
    "/storage/qrcodes/William.png",
];


        for($i = 0 ; $i < count($token); $i++){
            QrCode::format('png')->size(100)->errorCorrection('H')->generate('http://sucika-delbert.herokuapp.com/scan/'.$token[$i],'public/'.$qrcodePath[$i]);
        }

        //rightway

        // $Internals = Internal::all();
        // foreach($Internals as $Internal){
        //     QrCode::format('png')->size(100)->errorCorrection('H')->generate('http://sucika-delbert.herokuapp.com/scan/'.$Internal->token,$Internal->qrcodePath);
        // }

    }
}
