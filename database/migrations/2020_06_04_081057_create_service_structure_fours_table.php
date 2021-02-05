<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStructureFoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_structure_fours', function (Blueprint $table) {
            $table->id();
            $table->integer('service_category_id')->unsigned()->index();
            $table->integer('sub_service_category_id')->unsigned()->index();
            $table->text('front_text');
            $table->text('back_text');
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
        Schema::dropIfExists('service_structure_fours');
    }
}
