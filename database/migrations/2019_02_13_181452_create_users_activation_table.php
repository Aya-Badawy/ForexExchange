<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersActivationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users_activation', function (Blueprint $table) {
           $table->increments('id');
           $table->unsignedInteger('id_user');
           $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
           $table->string('token');
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
        Schema::dropIfExists('users_activation');
    }
}
