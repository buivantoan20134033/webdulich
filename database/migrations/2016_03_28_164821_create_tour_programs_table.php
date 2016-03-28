<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourProgramsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tour_programs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('description');
			$table->string('dest');
			$table->date('starttime');
			$table->integer('datenum');
			$table->string('transportation');
			$table->string('itinerary');
			$table->integer('cost');
			$table->string('image');

			$table->integer('place_id2')->unsigned();
			$table->foreign('place_id2')->references('id')->on('places')->onDelete('cascade');

			$table->integer('user_id2')->unsigned();
			$table->foreign('user_id2')->references('id')->on('users')->onDelete('cascade');

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
		Schema::drop('tour_programs');
	}

}
