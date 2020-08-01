<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;

class StudentController extends Controller
{
    
    public function __construct(){

        $this->middleware('auth');
    }

    public function index()
    {
        $students = \App\Student::orderBy('created_at', 'desc')->paginate(10);

        return response()->json($students);
    }

    public function create(Request $request)
    {   

        $student = new \App\Student;

        if($request->isMethod('PUT')){

            $title = 'Added';
            $student = \App\Student::findOrFail($request->get('student_id'));
        }

        $student->firstname = $request->get('firstname');
        $student->lastname = $request->get('lastname');
        $student->birthday = $request->get('birthday');

        if($student->save()){

            return response()->json($student);
        }

    }

    public function show($id)
    {
        $student = \App\Student::findOrFail($id);
        
       // ->leftjoin('student_data', 'student_data.student_id', '=', );
        return response()->json($student->student_data($id));
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
       // $student->delete();
       //$this->authorize('delete', $student);

       if(Auth::user()->can('delete')){
        $student->delete();

       // return response()->json($student);
       }

       return response()->json($student);

        
    }
}
