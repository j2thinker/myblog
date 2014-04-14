<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFunny extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create("funnys" , function ($table){
            $table->increments('id');
            $table->integer('uid')->unsigned();
            $table->string('title' , 80);
            $table->string('happentime' ,20);
            $table->text('joke');
            $table->string('conclusion');
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
        Schema::drop('funnys');
	}

}
