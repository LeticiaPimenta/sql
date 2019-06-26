<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = ["NAME", "CODE", "PRESENTATION_NAME", "VALUE"];

    protected $dates = [];

    public static $rules = [
        "NAME" => "required",
        "CODE" => "required",
    ];

    // Relationships

}
