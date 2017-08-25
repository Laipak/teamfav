<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('fullname')->unique();
            $table->string('nickname')->unique();
            $table->text('description')->nullable();
            $table->text('races')->nullable();
            $table->string('team_color_1')->nullable();
            $table->string('team_color_2')->nullable();
            $table->date('established_at')->nullable();
            $table->integer('manager_id')->nullable();
            $table->integer('captain_id')->nullable();
            $table->string('logo')->nullable();
            $table->string('svg')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('team');
    }
}
