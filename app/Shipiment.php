<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipiment extends Model {

    protected $fillable = ["name", "origin_country", "origin_city", "destiny_country", "destiny_city", "user_id"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "user_id" => "required|numeric",
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }


}
