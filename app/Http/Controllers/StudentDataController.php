<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentData;

class StudentDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student_data = new StudentData;
       // $sd = $request->all();

      // return $request->get('student_id');
        $student_data->student_id = $request->get('student_id');
        $student_data->grade_id = $request->get('grade_id');
        $student_data->section_id = $request->get('section_id');
        $student_data->weight = $request->get('weight');
        $student_data->height = $request->get('height');

        if($student_data->save()){

            return response()->json($student_data);
        }

       // return response()->json($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = \App\Student::findOrFail($id);

        return response()->json($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        //return response()->json($id);
        $student_data = StudentData::findOrFail($id);

        if($student_data->delete()){

            return response()->json($student_data);
        }
    }
}
