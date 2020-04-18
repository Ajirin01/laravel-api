<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students_model extends Model
{
    //
    protected $fillable = ['student_name'];
    public function class(){
        return $this->belongsTo(class_model::class);
    }
}
