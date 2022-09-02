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
            $table->bigIncrements('id');
            $table->string('rule');
            $table->bigInteger('win_number');
            $table->string('rank');
            $table->text('comment');
            $table->bigInteger('friendcode');
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
