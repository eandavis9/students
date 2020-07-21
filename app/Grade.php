<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grades';

    public function studentData(){

        return $this->hasMany('App\StudentData');
    }

    public function sections(){
        
    }

}
