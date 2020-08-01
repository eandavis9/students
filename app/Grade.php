<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grades';

    public function studentData(){

        return $this->hasMany('App\StudentData');
    }

    public function students(){

        return $this->hasMany('App\Student');
    }

    public function sections (){

        return $this->hasMany('App\Section');
}

}
