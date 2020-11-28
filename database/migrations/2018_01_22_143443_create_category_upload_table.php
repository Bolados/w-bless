<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryUploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_upload', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->index;
            $table->integer('upload_id')->unsigned()->index;
            $table->foreign('category_id')->references('id')->on('categories')->ondelete('cascade');
            $table->foreign('upload_id')->references('id')->on('uploads')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_upload');
    }
}
