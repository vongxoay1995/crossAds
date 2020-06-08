<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAppdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appdetail', function (Blueprint $table) {
            $table->increments('id_appdetail', true)->unsigned();
            $table->string('package', 256);
            $table->string('name', 256);
            $table->string('icon', 256);
            $table->string('content', 256);
            $table->string('linkstore', 256);
        });
        DB::table('appdetail')->insert(
            [
                [
                    'package' => 'com.eco.textonphoto.quotecreator',
                    'name' => 'Viết chữ lên ảnh',
                    'icon' => '/storage/images/quote/icon.png',
                    'content' => 'Ứng dụng Viết chữ lên ảnh mới nhất 2020',
                    'linkstore' => 'https://play.google.com/store/apps/details?id=com.eco.textonphoto.quotecreator'
                ],
                [
                    'package' => 'com.kolor.art.color.colorfy.coloring',
                    'name' => 'Sách tô màu 2020',
                    'icon' => '/storage/images/colorbook/icon.png',
                    'content' => 'Color Book: Sách tô màu, sách tô màu cho người lớn miễn phí 2020',
                    'linkstore' => 'https://play.google.com/store/apps/details?id=com.kolor.art.color.colorfy.coloring'
                ],
                [
                    'package' => 'com.eco.note',
                    'name' => 'Super Note',
                    'icon' => '/storage/images/note/icon.png',
                    'content' => 'Ghi Chú: Ghi chú nhanh chóng và tiện lợi 2020',
                    'linkstore' => 'https://play.google.com/store/apps/details?id=com.eco.note'
                ],
                [
                    'package' => 'com.eco.flashlight',
                    'name' => 'Đèn Pin 2020',
                    'icon' => '/storage/images/flashlight/icon.png',
                    'content' => 'Đèn Pin - Đèn Pin Siêu Sáng 2020',
                    'linkstore' => 'https://play.google.com/store/apps/details?id=com.eco.flashlight'
                ],
                [
                    'package' => 'com.vtool.slowmotion.fastmotion.video',
                    'name' => 'Slow motion',
                    'icon' => '/storage/images/speedmotion/icon.png',
                    'content' => 'Slow motion - Speed up video - Speed motion',
                    'linkstore' => 'https://play.google.com/store/apps/details?id=com.vtool.slowmotion.fastmotion.video'
                ],
                [
                    'package' => 'com.eco.fastcharger',
                    'name' => 'Sạc Pin Nhanh',
                    'icon' => '/storage/images/fastcharger/icon.png',
                    'content' => 'Sạc Pin Nhanh - Sạc Pin Nhanh Siêu Tốc',
                    'linkstore' => 'https://play.google.com/store/apps/details?id=com.eco.fastcharger'
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
        Schema::dropIfExists('appdetail');
    }
}
