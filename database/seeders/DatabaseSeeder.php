<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Company::factory(1)->create();
        Admin::factory()->create();

        // page
        \App\Models\Page::factory(1)->create([
            'title'  => 'Who we are ?',
            'slug' => 'about-us',
            'description' => "Nice Education Consultancy Pvt. Ltd. is an experienced professional in Abroad Study Field and has vast knowledge in the respected field. If you are here than you are in the most successful consultant. From the past history of our company you will know about us. Most of the student and their parents had get satisfaction from us helping students to reach their goals. Nice Education assist students or parents in making educational decisions and giving advice for test preparation, visa preparation documentations etc.",
            'status' => true,
        ]);

        $this->call(WhyUsSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(HowItWorkSeeder::class);
        $this->call(DocumentSeeder::class);
        $this->call(CourseSeeder::class);
    }
    private function runArtisanClearCommands(): void
    {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
    }
}
