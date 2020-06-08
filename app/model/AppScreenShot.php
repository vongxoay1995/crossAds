<?php


namespace App\model;


use Illuminate\Database\Eloquent\Model;

class AppScreenShot extends Model
{
    protected $table = "appscreenshot";
    public $timestamps = false;
    protected $fillable = ['path'];

}