<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "email", "user_token", "password", "logado", "login", "imagem", "wallet", "profile_img", "raw_login_info", "subscription_id", "parent_user", "access_token", "group_id"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "email" => "required",
        "user_token" => "required",
        "logado" => "required",
        "wallet" => "required",
        "group_id" => "required|numeric",
    ];

    public function group()
    {
        return $this->belongsTo("App\Group");
    }


}
