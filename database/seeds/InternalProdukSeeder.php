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
        $Internals = Internal::all();


        foreach($Internals as $Internal){
            QrCode::format('png')->size(100)->errorCorrection('H')->generate('http://sucika-delbert.herokuapp.com/scan/'.$Internal->token,$Internal->qrcodePath);
        }


    }
}
