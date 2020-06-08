<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAppscrossTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appcross', function (Blueprint $table) {
            $table->increments('id_appcross', true)->unsigned();
            $table->integer('id_appdetail')->unsigned()->nullable();
            $table->integer('id_apppackage')->unsigned()->nullable();
            $table->foreign('id_appdetail')->references('id_appdetail')->on('appdetail')->onDelete('cascade');
            $table->foreign('id_apppackage')->references('id_apppackage')->on('apppackage')->onDelete('cascade');
        });
        DB::table('appcross')->insert(
            [
                [
                    'id_appdetail' => 3,
                    'id_apppackage' => 1,
                ],
                [
                    'id_appdetail' => 4,
                    'id_apppackage' => 1,
                ],
                [
                    'id_appdetail' => 2,
                    'id_apppackage' => 1,
                ],
                [
                    'id_appdetail' => 5,
                    'id_apppackage' => 1,
                ],
                [
                    'id_appdetail' => 6,
                    'id_apppackage' => 1,
                ],
                [
                    'id_appdetail' => 3,
                    'id_apppackage' => 2,
                ],
                [
                    'id_appdetail' => 4,
                    'id_apppackage' => 2,
                ],
                [
                    'id_appdetail' => 1,
                    'id_apppackage' => 2,
                ],
                [
                    'id_appdetail' => 5,
                    'id_apppackage' => 2,
                ],
                [
                    'id_appdetail' => 6,
                    'id_apppackage' => 2,
                ],
                [
                    'id_appdetail' => 1,
                    'id_apppackage' => 3,
                ],
                [
                    'id_appdetail' => 4,
                    'id_apppackage' => 3,
                ],
                [
                    'id_appdetail' => 2,
                    'id_apppackage' => 3,
                ],
                [
                    'id_appdetail' => 5,
                    'id_apppackage' => 3,
                ],
                [
                    'id_appdetail' => 6,
                    'id_apppackage' => 3,
                ],
                [
                    'id_appdetail' => 3,
                    'id_apppackage' => 4,
                ],
                [
                    'id_appdetail' => 1,
                    'id_apppackage' => 4,
                ],
                [
                    'id_appdetail' => 2,
                    'id_apppackage' => 4,
                ],
                [
                    'id_appdetail' => 5,
                    'id_apppackage' => 4,
                ],
                [
                    'id_appdetail' => 6,
                    'id_apppackage' => 4,
                ],
                [
                    'id_appdetail' => 3,
                    'id_apppackage' => 5,
                ],
                [
                    'id_appdetail' => 4,
                    'id_apppackage' => 5,
                ],
                [
                    'id_appdetail' => 2,
                    'id_apppackage' => 5,
                ],
                [
                    'id_appdetail' => 1,
                    'id_apppackage' => 5,
                ],
                [
                    'id_appdetail' => 6,
                    'id_apppackage' => 5,
                ],
                [
                    'id_appdetail' => 3,
                    'id_apppackage' => 6,
                ],
                [
                    'id_appdetail' => 4,
                    'id_apppackage' => 6,
                ],
                [
                    'id_appdetail' => 2,
                    'id_apppackage' => 6,
                ],
                [
                    'id_appdetail' => 5,
                    'id_apppackage' => 6,
                ],
                [
                    'id_appdetail' => 1,
                    'id_apppackage' => 6,
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appscross');
    }
}
