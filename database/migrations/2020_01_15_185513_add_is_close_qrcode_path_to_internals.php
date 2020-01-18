<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsCloseQrcodePathToInternals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('internals', function (Blueprint $table) {
            $table->boolean('isClose');
            $table->string('qrcodePath');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('internals', function (Blueprint $table) {
            $table->dropColumn('isClose');
            $table->dropColumn('qrcodePath');
        });
    }
}
