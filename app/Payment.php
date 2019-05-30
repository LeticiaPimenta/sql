<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {

    protected $fillable = ["name", "total", "dados", "shop", "type", "user", "nfe", "tid"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "shop" => "required",
        "type" => "required",
        "user" => "required",
    ];

    // Relationships

}
