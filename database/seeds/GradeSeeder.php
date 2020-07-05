<?php

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')
        ->insert([

            array(
             'grade_name' => 'Grade 1'
            ),

            
            array(
                'grade_name' => 'Grade 2'
            ),

            
            array(
                'grade_name' => 'Grade 3'
            ),

            
            array(
                'grade_name' => 'Grade 4'
            ),

            
            array(
                'grade_name' => 'Grade 5'
            ),

            
            array(
                'grade_name' => 'Grade 6'
            ),

            
            array(
                'grade_name' => 'Grade 7'
            ),

            
            array(
                'grade_name' => 'Grade 8'
            ),

            
            array(
                'grade_name' => 'Grade 9'
            ),

            
            array(
                'grade_name' => 'Grade 10'
            ),
        ]);
    }
}
