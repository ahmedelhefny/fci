<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactUs', function (Blueprint $table) {
            $table->string('email1');
            $table->string('email2');
            $table->string('email3');
            $table->string('email4');
            $table->string('num1');

            $table->string('num2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
        Schema::table('contactUs', function (Blueprint $table) {
            //
        });
    }
}
