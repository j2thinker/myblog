<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMessages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('messages' ,function ($table){
            $table->increments('id');
            $table->integer('uid');
            $table->text('message');
            $table->integer('ip')->unsigned();
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
        Schema::drop('messages');
	}
}
