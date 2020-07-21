<?php

use Illuminate\Database\Seeder;
//use DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')
        ->insert([

            array(
            'grade_id' => 0,
            'section_name' => 'Asia'

            ),

            array(
            'grade_id' => 0,
            'section_name' => 'Europe'
            )
        ]);
    }
}
