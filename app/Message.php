<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    protected $fillable = ["receiver", "text", "status", "user_id"];

    protected $dates = [];

    public static $rules = [
        "receiver" => "required",
        "user_id" => "required|numeric",
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }


}
