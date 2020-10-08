<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Group;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('groupName');
        });

        Group::insert([
            ['id' => NULL, 'groupName' => 'User'],
            ['id' => NULL, 'groupName' => 'Moderator'],
            ['id' => NULL, 'groupName' => 'Administrator'],
            ['id' => NULL, 'groupName' => 'SuperAdministrator']           
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
