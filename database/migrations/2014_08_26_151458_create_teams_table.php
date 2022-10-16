<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('team',50)->nullable(true);
            $table->bigInteger('motivation')->nullable(true);
            $table->bigInteger('number_applicant')->nullable(true);
            $table->string('position_wanted',50)->nullable(true);
            $table->string('weapon_wanted',50)->nullable(true);
            $table->text('comment',100)->nullable(true);
            $table->bigInteger('friendcode')->nullable(true);
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
        Schema::dropIfExists('teams');
    }
}
