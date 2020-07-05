<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\StudentData::class, function (Faker $faker) {

    $students = App\Student::pluck('id')->toArray();
    $grades = App\Grade::pluck('id')->toArray();

    return [
        
        'student_id' => array_rand($students),
        'grade_id' => array_rand($grades),
        'weight' => $faker->randomFloat(3, 2, 70),
        'height' =>$faker->randomFloat(3, 2, 200)
    ];
});
