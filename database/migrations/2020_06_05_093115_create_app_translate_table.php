<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppTranslateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_translate', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_appdetail')->unsigned()->nullable();
            $table->string('name');
            $table->text('content');
            $table->string('locale')->index();
            $table->unique(['id_appdetail', 'locale']);
            $table->foreign('id_appdetail')->references('id_appdetail')->on('appdetail')->onDelete('cascade');
        });
        DB::table('app_translate')->insert(
            [
                [
                    'id_appdetail' => 1,
                    'name' => 'Viết chữ lên ảnh',
                    'content' => 'Ứng dụng Viết chữ lên ảnh mới nhất 2020',
                    'locale' => 'vi'
                ],
                [
                    'id_appdetail' => 1,
                    'name' => 'Text To Photo',
                    'content' => 'Download Now Text on photo App 2020',
                    'locale' => 'en'
                ],
                [
                    'id_appdetail' => 2,
                    'name' => 'Sách tô màu 2020',
                    'content' => 'Color Book: Sách tô màu, sách tô màu cho người lớn miễn phí 2020',
                    'locale' => 'vi'
                ],
                [
                    'id_appdetail' => 2,
                    'name' => 'Color Book 2020',
                    'content' => 'Coloring Book, Color Book for Adults Free 2020',
                    'locale' => 'en'
                ],
                [
                    'id_appdetail' => 3,
                    'name' => 'Super Note',
                    'content' => 'Ghi Chú: Ghi chú nhanh chóng và tiện lợi 2020',
                    'locale' => 'vi'
                ],
                [
                    'id_appdetail' => 3,
                    'name' => 'Super Note',
                    'content' => 'Super Note: Widget Note, Color Notes & Notepad',
                    'locale' => 'en'
                ],
                [
                    'id_appdetail' => 4,
                    'name' => 'Đèn Pin 2020',
                    'content' => 'Đèn Pin - Đèn Pin Siêu Sáng 2020',
                    'locale' => 'vi'
                ],
                [
                    'id_appdetail' => 4,
                    'name' => 'Flash light',
                    'content' => 'Flash light - Flashlight App for Free',
                    'locale' => 'en'
                ],
                [
                    'id_appdetail' => 5,
                    'name' => 'Slow motion',
                    'content' => 'Slow motion - Speed up video - Speed motion',
                    'locale' => 'vi'
                ],
                [
                    'id_appdetail' => 5,
                    'name' => 'Slow motion',
                    'content' => 'Slow motion - Speed up video - Speed motion',
                    'locale' => 'en'
                ],
                [
                    'id_appdetail' => 6,
                    'name' => 'Sạc Pin Nhanh',
                    'content' => 'Sạc Pin Nhanh - Sạc Pin Nhanh Siêu Tốc',
                    'locale' => 'vi'
                ],
                [
                    'id_appdetail' => 6,
                    'name' => 'Fast charging',
                    'content' => 'Fast charging - Charge Battery Fast',
                    'locale' => 'en'
                ],
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
        Schema::dropIfExists('app_translate');
    }
}
