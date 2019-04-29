<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "email", "password", "profile_img", "raw_login_info", "access_token"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "email" => "required",
        "password" => "required",
    ];

    // Relationships

}
