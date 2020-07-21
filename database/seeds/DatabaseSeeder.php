<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(StudentSeeder::class);
       // $this->call(GradeSeeder::class);

//$this->call(StudentDataSeeder::class);
$this->call(SectionSeeder::class);

    }
}
