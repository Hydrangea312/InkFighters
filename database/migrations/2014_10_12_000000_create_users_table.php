<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable(true);
            $table->unsignedBigInteger('team_id')->nullable(true);
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade'); 
            $table->string('email')->unique()->nullable(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(true);
            $table->integer('question')->default(0);
            $table->integer('join')->default(0);
            $table->bigInteger('friendcode')->nullable(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
