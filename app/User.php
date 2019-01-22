<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $fillable = ["name", "email", "profile_img", "raw_login_info", "access_token", "expiration_time"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "email" => "required",
    ];

    public $timestamps = false;

    // Relationships

}
