<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('location_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->integer('admin_id')->nullable();
            $table->dateTime('date_of_hire');
            $table->tinyInteger('amount');
            $table->string('title');
            $table->integer('price');
            $table->string('address');
            $table->text('detail');
            $table->tinyInteger('status')->default('0');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('posts');
    }
}
