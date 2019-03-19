<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BenAmigo extends Model {

    protected $fillable = ["eu", "amigo", "relationship", "status"];

    protected $dates = [];

    public static $rules = [
        "eu" => "required",
        "amigo" => "required",
    ];

    // Relationships

}
