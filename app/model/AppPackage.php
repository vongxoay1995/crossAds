<?php


namespace App\model;


use Illuminate\Database\Eloquent\Model;

class AppPackage extends Model
{
    protected $table = "apppackage";
    public $timestamps = false;
    protected $fillable  = [
        'package',
    ];
}