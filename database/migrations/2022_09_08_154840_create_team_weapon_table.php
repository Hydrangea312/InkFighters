<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamWeaponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_weapon', function (Blueprint $table) {
            $table->bigInteger('team_id')->unsigned();
            $table->bigInteger('weapon_id')->unsigned();
            $table->primary(['team_id','weapon_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_weapon');
    }
}
