<?php


namespace App\model;


use Illuminate\Database\Eloquent\Model;

class AppDetail extends Model
{
    protected $table = "appdetail";
    public $timestamps = false;
    protected $fillable  = [
        'id_appdetail',
        'package',
        'name',
        'icon',
        'content',
        'linkstore',
    ];
    public function appscreenshot()
    {
        return $this->hasMany(AppScreenShot::class,"id_appdetail","id_appdetail");
    }
}