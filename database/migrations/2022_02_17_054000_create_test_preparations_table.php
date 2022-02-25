<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestPreparationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_preparations', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->string('slug',200);
            $table->string('document',200)->nullable();
            $table->string('banner_image')->default('default_test_banner.png');

            $table->string('overview_title',200);
            $table->text('overview_description',200);
            $table->string('overview_image',200)->nullable();

            $table->string('preparation_title',200);
            $table->text('preparation_description',200);
            $table->string('preparation_right_image',200)->nullable();
            $table->string('preparation_left_image',200)->nullable();
            $table->string('reading_practice_title',100)->nullable();
            $table->text('reading_practice')->nullable();
            $table->string('speaking_practice_title',100)->nullable();
            $table->text('speaking_practice')->nullable();
            $table->string('listening_practice_title',100)->nullable();
            $table->text('listening_practice')->nullable();
            $table->string('writing_practice_title',100)->nullable();
            $table->text('writing_practice')->nullable();

            $table->string('format_title',200);
            $table->text('format_description',200);
            $table->string('reading_pattern',200)->nullable();
            $table->string('listening_pattern',200)->nullable();
            $table->string('writing_pattern',200)->nullable();
            $table->string('speaking_pattern',200)->nullable();


            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('test_preparations');
    }
}
