<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id')->unique();
            $table->integer('total_played')->default(0);
            $table->integer('win_played')->default(0);
            $table->integer('draw_played')->default(0);
            $table->integer('lose_played')->default(0);

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
        Schema::dropIfExists('team_fields');
    }
}
