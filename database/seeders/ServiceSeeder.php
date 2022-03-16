<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(
            [
                [
                    'image' =>'no-image.jpg',
                    'name' => 'Career Counseling',
                    'slug' =>'career-counseling',
                    'title' =>'Career Counseling',
                    'description' =>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
                    'priority' => 1,
                    'bg_colour'=>"rgba(252, 227, 0, 0.26)"
                ],
                [
                    'image' =>'no-image.jpg',
                    'name' => 'Documentation Guidance',
                    'slug' =>'documentation-guidance',
                    'title' =>'Documentation Guidance',
                    'description' =>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
                    'priority' => 2,
                    'bg_colour'=>"rgba(206, 90, 90, 0.5)"
                ],

                [
                    'image' =>'no-image.jpg',
                    'name' => 'Travel Arrangement',
                    'slug' =>'travel-arrangement',
                    'title' =>'Travel Assistance',
                    'description' =>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
                    'priority' => 3,
                    'bg_colour'=>"rgba(196, 255, 216, 0.5)"

                ],
                [
                    'image' =>'no-image.jpg',
                    'name' => 'Interview Assistance',
                    'slug' =>'interview-assistance',
                    'title' =>'Interview Assistance',
                    'description' =>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
                    'priority' => 4,
                    'bg_colour'=>"rgba(158, 214, 255, 0.5)"

                ],
                [
                    'image' =>'no-image.jpg',
                    'name' => 'Finance Assistance',
                    'slug' =>'finance-assistance',
                    'title' =>'Finance Assistance',
                    'description' =>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
                    'priority' => 5,
                    'bg_colour'=>"rgba(162, 242, 124, 0.5)"

                ],
                [
                    'image' =>'no-image.jpg',
                    'name' => 'Visa Assistance',
                    'slug' =>'visa-assistance',
                    'title' =>'Visa Guidance',
                    'description' =>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
                    'priority' => 6,
                    'bg_colour'=>"rgba(252, 227, 0, 0.26)"

                ],
                [
                    'image' =>'no-image.jpg',
                    'name' => 'College & University Selection',
                    'slug' =>'college-and-university-selection',
                    'title' =>'Guidance in College & University Selection',
                    'description' =>'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
                    'priority' => 7,
                    'bg_colour'=>"rgba(206, 90, 90, 0.5)"

                ],


            ]);
    }
}
