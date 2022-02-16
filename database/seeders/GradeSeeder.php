<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'course_name' => 'Program and Career Orientation',
            'test_name' => 'Assessment',
            'best_grade' => 9.10
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Computer Science Basics',
            'test_name' => 'Written Exam',
            'best_grade' => 6.70
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Programming Basics',
            'test_name' => 'Case Study',
            'best_grade' => 9.00
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Object Oriented Programming',
            'test_name' => 'Case Study',
            'best_grade' => 7.00
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Object Oriented Programming',
            'test_name' => 'Project',
            'best_grade' => 8.30
        ]);
    }
}
