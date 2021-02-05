<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_books', function (Blueprint $table) {
            $table->id();
            $table->integer('service_category_id')->unsigned()->index();
            $table->text('banner');
            $table->text('banner_res');
            $table->text('thumbnail');
            $table->string('title');
            $table->string('short_des');
            $table->boolean('case_book_content_status');
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
        Schema::dropIfExists('case_books');
    }
}
