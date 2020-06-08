<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAppscreenshotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appscreenshot', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->integer('id_appdetail')->unsigned()->nullable();
            $table->string('path', 256);
            $table->foreign('id_appdetail')->references('id_appdetail')->on('appdetail')->onDelete('cascade');
        });
        DB::table('appscreenshot')->insert(
            [
                [
                    'id_appdetail' => 1,
                    'path' => '/storage/images/quote/ss1.jpg',
                ],
                [
                    'id_appdetail' => 1,
                    'path' => '/storage/images/quote/ss2.jpg',
                ],
                [
                    'id_appdetail' => 1,
                    'path' => '/storage/images/quote/ss3.jpg',
                ],
                [
                    'id_appdetail' => 2,
                    'path' => '/storage/images/colorbook/ss1.png',
                ],
                [
                    'id_appdetail' => 2,
                    'path' => '/storage/images/colorbook/ss2.png',
                ],
                [
                    'id_appdetail' => 2,
                    'path' => '/storage/images/colorbook/ss3.png',
                ],
                [
                    'id_appdetail' => 3,
                    'path' => '/storage/images/note/ss1.jpg',
                ],
                [
                    'id_appdetail' => 3,
                    'path' => '/storage/images/note/ss2.jpg',
                ],
                [
                    'id_appdetail' => 3,
                    'path' => '/storage/images/note/ss3.jpg',
                ],
                [
                    'id_appdetail' => 4,
                    'path' => '/storage/images/flashlight/ss1.png',
                ],
                [
                    'id_appdetail' => 4,
                    'path' => '/storage/images/flashlight/ss2.png',
                ],
                [
                    'id_appdetail' => 4,
                    'path' => '/storage/images/flashlight/ss3.png',
                ],
                [
                    'id_appdetail' => 5,
                    'path' => '/storage/images/speedmotion/ss1.png',
                ],
                [
                    'id_appdetail' => 5,
                    'path' => '/storage/images/speedmotion/ss2.png',
                ],
                [
                    'id_appdetail' => 5,
                    'path' => '/storage/images/speedmotion/ss3.png',
                ],
                [
                    'id_appdetail' => 6,
                    'path' => '/storage/images/fastcharger/ss1.png',
                ],
                [
                    'id_appdetail' => 6,
                    'path' => '/storage/images/fastcharger/ss2.png',
                ],
                [
                    'id_appdetail' => 6,
                    'path' => '/storage/images/fastcharger/ss3.png',
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
        Schema::dropIfExists('appscreenshot');
    }
}
