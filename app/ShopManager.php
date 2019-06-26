<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopManager extends Model {

    protected $fillable = ["shop_id", "manager_id", "role"];

    protected $dates = [];

    public static $rules = [
        "shop_id" => "required",
        "manager_id" => "required",
    ];

    // Relationships

}
