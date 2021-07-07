<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coins', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ratio_id');
            $table->unsignedInteger('user_id');
            $table->integer('bank');
            $table->integer('bank_id');
            $table->integer('money');
            $table->integer('status');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ratio_id')->references('id')->on('ratios');
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
        Schema::dropIfExists('coins');
    }
}
