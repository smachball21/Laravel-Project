<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersgroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersgroups', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->unsignedBigInteger('userID')->index('username');
            $table->integer('groupID')->nullable()->default(1)->index('groupe');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersgroups');
    }
}
