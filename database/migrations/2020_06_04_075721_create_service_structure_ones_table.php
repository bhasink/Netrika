<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStructureOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_structure_ones', function (Blueprint $table) {
            $table->id();
            $table->integer('service_category_id')->unsigned()->index();
            $table->integer('sub_service_category_id')->unsigned()->index();
            $table->string('list_text');
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
        Schema::dropIfExists('service_structure_ones');
    }
}
