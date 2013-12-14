<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsToPeopleName extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('persons');

		Schema::create('people', function(Blueprint $table)
		{

			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('name');
			//$table->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

		Schema::dropIfExists('people');

		Schema::create('persons', function(Blueprint $table)
		{

			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('name');
			//$table->timestamps();
		});
	}

}