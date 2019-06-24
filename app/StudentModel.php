<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table = "students";

    public function Fees(){
        return $this->hasMany('App\FeesModel','Student_id');
    }
}
