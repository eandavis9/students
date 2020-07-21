<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\StudentData;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::orderBy('grade_name','asc')->paginate(10);

        return response()->json($grades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $grade = new Grade;

        if($request->isMethod('put')){

            $grade = Grade::findOrFail($request->get('grade_id'));
            //$student_data = StudentData::findOrFail($request->get('grade_id'));
        }

        $grade->grade_name = $request->get('grade_name');

        if($grade->save()){

            return response()->json($grade);
        }
        
    }

 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grade = Grade::findOrFail($id);

        return response()->json($grade);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);

        if($grade->delete()){

           return response()->json($grade);
        }
    }
}
