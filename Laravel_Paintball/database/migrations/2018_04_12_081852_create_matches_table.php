<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('winner');
            $table->integer('scoreTeam1');
            $table->integer('scoreTeam2');
            $table->string('city');
            $table->string('description');
            $table->integer('matchStatus');
            $table->integer('cashPrize');
            $table->float('oddsTeam1', 11, 2);
            $table->float('oddsTeam2', 11, 2);
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
        Schema::dropIfExists('matches');
    }
}
