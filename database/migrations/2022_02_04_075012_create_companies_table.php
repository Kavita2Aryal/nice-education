<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('alternate_email')->nullable();
            $table->date('established_date')->nullable();
            $table->string('address');
            $table->string('phone')->nullable();
            $table->string('mobile');
            $table->string('logo');
            $table->string('fav_icon')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->text('map_url')->nullable();

            $table->text('our_mission')->nullable();
            $table->text('our_vision')->nullable();

            $table->string('title_for_contact_us')->nullable();
            $table->text('description_for_contact_us')->nullable();

            $table->text('footer_text')->nullable();

            $table->string('homepage_banner')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('sub_text')->nullable();
            $table->string('btn_text')->nullable();
            $table->string('btn_url')->nullable();

            /** for content of visa acceptance content */

            $table->string('visa_acceptance_image1')->nullable();
            $table->string('visa_acceptance_description1')->nullable();
            $table->string('visa_acceptance_image2')->nullable();
            $table->string('visa_acceptance_description2')->nullable();


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
        Schema::dropIfExists('companies');
    }
}
