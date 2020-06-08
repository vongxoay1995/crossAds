<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateApppackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apppackage', function (Blueprint $table) {
            $table->increments('id_apppackage', true)->unsigned();
            $table->string('package', 256);
        });
        DB::table('apppackage')->insert(
            [
                [
                    'package' => 'com.eco.textonphoto.quotecreator',
                ],
                [
                    'package' => 'com.kolor.art.color.colorfy.coloring',
                ],
                [
                    'package' => 'com.eco.note',
                ],
                [
                    'package' => 'com.eco.flashlight',
                ],
                [
                    'package' => 'com.vtool.slowmotion.fastmotion.video',
                ],
                [
                    'package' => 'com.eco.fastcharger',
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
        Schema::dropIfExists('apppackage');
    }
}
