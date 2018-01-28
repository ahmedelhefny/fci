<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegiserationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regiserations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('R_name');
            $table->string('R_faculty');
            $table->string('R_level');
            $table->string('R_depts');
            $table->string('R_location');
            $table->integer('seminar_id');
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
        Schema::dropIfExists('regiserations');
    }
}
