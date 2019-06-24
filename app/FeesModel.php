<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeesModel extends Model
{    
    protected $table = "fees";
    public function Student(){
        return $this->belongsTo('App\StudentModel','Student_id');
    }
}
