<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsUserApplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_apply', function (Blueprint $table) {
            $table->tinyInteger('user_apply_status')->default('0');
            $table->tinyInteger('owner_post_status')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_apply', function (Blueprint $table) {
            $table->tinyInteger('user_apply_status')->default('0');
            $table->tinyInteger('owner_post_status')->default('0');
        });
    }
}
