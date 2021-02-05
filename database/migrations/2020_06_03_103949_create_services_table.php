<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('service_category_id')->unsigned()->index();
            $table->text('banner_image');
            $table->text('banner_image_res');
            $table->string('experts_user_id');
            $table->text('main_content');
            $table->string('structure_one_title');
            $table->text('structure_one_title_para');
            $table->string('structure_two_title');
            $table->text('structure_two_title_para');
            $table->string('structure_three_title');
            $table->text('structure_three_title_para');
            $table->string('structure_four_title');
            $table->text('structure_four_title_para');
            $table->string('structure_five_title');
            $table->text('structure_five_title_para');
            $table->integer('priority');
            $table->boolean('status');
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
        Schema::dropIfExists('services');
    }
}
