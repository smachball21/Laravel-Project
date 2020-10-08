<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsersgroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usersgroups', function (Blueprint $table) {
            $table->foreign('group_id', 'groupe')->references('id')->on('groups')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('user_id', 'username')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usersgroups', function (Blueprint $table) {
            $table->dropForeign('groupe');
            $table->dropForeign('username');
        });
    }
}
