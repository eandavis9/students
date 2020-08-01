<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Student extends Model
{
    protected $table = 'students';
    
    public function student_data($id){

        $student_data = DB::table('student_data')
        ->where('student_data.student_id', '=', $id)
        ->join('grades', 'grades.id', 'student_data.grade_id')
        ->leftJoin('sections', 'sections.id', '=', 'student_data.section_id')
        ->select('student_data.*', 'grades.grade_name', 'sections.section_name')
        ->get();

        return $student_data;
        //return $this->hasManyThrough('App\StudentData', 'App\Grade');
       // return $this->hasMany('App\StudentData');
    }

    public function grades(){

        return $this->belongsToMany('App\Grade');
    }

    //public function get
}
