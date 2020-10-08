<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersgroups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index('username');
            $table->unsignedBigInteger('group_id')->default(1)->index('groupe');

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
