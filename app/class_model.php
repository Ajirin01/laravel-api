<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class class_model extends Model
{
    //

    protected $fillable = [
        'class_name'
    ];
    public function students(){
        return $this->hasMany(students_model::class);
    }
}
