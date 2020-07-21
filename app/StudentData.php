<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentData extends Model
{
    protected $table = 'student_data';

    public function student(){

        return $this->belongsTo('App\Student');
    }

    public function grade(){

        return $this->belongsTo('App\Grade');
    }
}
