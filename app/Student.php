<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public function student_data(){

        return $this->hasMany('App\StudentData');
    }
}
