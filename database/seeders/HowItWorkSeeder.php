<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HowItWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('how_it_works')->insert(
            [
                [
                    'description' =>'Our career counselling experts listen to you.',
                ],
                [
                    'description' =>'Then we’ll work out the details.',
                ],

                [
                    'description' =>'We’ll also address any visa issues.',

                ],
                [
                    'description' =>'We’ll handle the application process.',

                ],

            ]);
    }
}
