<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_requireds')->insert(
            [
                [
                    'name' =>'Passport Copy',
                ],
                [
                    'name' =>'Standardized Score Reports (GRE/GMAT/SAT)',
                ],

                [
                    'name' =>'Statement of Purpose (SOPs)',

                ],
                [
                    'name' =>'SLC and +2 Marksheets and Certificates',
                ],
                [
                    'name' =>'Recommendation Letters (LORs)',
                ],
                [
                    'name' =>'Essay (if any)',
                ],
                [
                    'name' =>'Bachelor Transcripts',
                ],
                [
                    'name' =>'Financial Documents',
                ],
                [
                    'name' =>'Resume or CV',
                ],
                [
                    'name' =>'Language Proficient Test Score (TOFEL/IELTS/PTE)',
                ],
                [
                    'name' =>'Affidant of support from sponsor',
                ],
                [
                    'name' =>'Extra certificates (if any)',
                ],


            ]);
    }
}
