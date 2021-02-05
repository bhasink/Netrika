<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhitePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('white_papers', function (Blueprint $table) {
            $table->id();
            $table->integer('service_category_id')->unsigned()->index();
            $table->integer('sub_service_category_id')->unsigned()->index();
            $table->text('image');
            $table->string('title');
            $table->text('file');
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
        Schema::dropIfExists('white_papers');
    }
}
