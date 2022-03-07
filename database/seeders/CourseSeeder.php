<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(
            [
                [
                    'name' =>'Hospitality and Tourism',
                ],
                [
                    'name' =>'Education and Teaching',
                ],

                [
                    'name' =>'Business and Accountancy',

                ],
                [
                    'name' =>'Humanities and Social Work',
                ],
                [
                    'name' =>'Health Science',
                ],
                [
                    'name' =>'Music and Creative Arts',
                ],
                [
                    'name' =>'Nursing and Midwifery',
                ],
                [
                    'name' =>'Justice and Law',
                ],
                [
                    'name' =>'Digital Media and Information Technology',
                ],
                [
                    'name' =>'Marine and Environmental Science and some',
                ],
                [
                    'name' =>'Science and Engineering',
                ],
                [
                    'name' =>'pathway programs',
                ],


            ]);
    }
}
