<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart_model extends Model
{
    //
    protected $fillable = [
        'item_name',
        'item_price',
        'item_image_url'
    ];
}
