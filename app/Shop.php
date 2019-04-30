<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model {

    protected $fillable = ["name", "total"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
    ];

    // Relationships

}
