<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyAbroadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_abroads', function (Blueprint $table) {
            $table->id();
            $table->string('country_name',200);
            $table->string('slug');
            $table->text('why_message');
            $table->text('welcome_message');
            $table->string('education_system_title',200)->nullable();
            $table->text('education_system_description')->nullable();
            $table->string('education_system_image',200);

            $table->string('popular_course_title',200);
            $table->text('popular_course_description');

            $table->string('document_required_title',200);
            $table->text('document_required_description');


            $table->string('intake_title',200);
            $table->text('intake_description');
            $table->string('first_intake_image',200);
            $table->string('second_intake_image',200);
            $table->string('first_intake_session',100);
            $table->string('second_intake_session',100);


            $table->string('work_visa_section_title',200);
            $table->text('work_visa_section_description');
            $table->text('yellow_section_content')->nullable();
            $table->string('image_below_yellow_section',200)->nullable();
            $table->string('title_below_yellow_section',200)->nullable();
            $table->text('description_below_yellow_section')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_abroads');
    }
}
