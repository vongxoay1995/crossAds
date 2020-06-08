<?php


namespace App\model;


use Illuminate\Database\Eloquent\Model;

class AppCross extends Model
{
    protected $table = "appcross";
    public $timestamps = false;
    protected $fillable  = [
        'id_appdetail',
        'id_apppackage',
    ];
}