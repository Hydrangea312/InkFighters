<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Opponents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('opponents', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(true);
            $table->string('rule',10)->nullable(true);
            $table->bigInteger('win_number')->nullable(true);
            $table->string('rank',10)->nullable(true);
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
        //
    }
}
