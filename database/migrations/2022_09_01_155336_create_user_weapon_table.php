<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWeaponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_weapon', function (Blueprint $table) {
 
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('weapon_id')->unsigned();
            $table->primary(['user_id','weapon_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_weapon');
    }
}
