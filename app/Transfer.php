<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model {

    protected $fillable = ["name", "amount", "key", "status", "receiver", "operation", "user_id"];

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
