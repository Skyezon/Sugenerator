<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterInternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('internals', function (Blueprint $table) {
            $table->string('qrcodePath')->nullable()->change();
            $table->boolean('isClose')->nullable()->change();
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
            $table->string('qrcodePath')->change();
            $table->boolean('isClose')->change();
        });
    }
}
