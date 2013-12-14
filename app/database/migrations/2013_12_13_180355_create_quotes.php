<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quotes', function(Blueprint $table)
		{

			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->text('quote');
			$table->integer('page')->nullable();
			$table->integer('person_id');
			$table->integer('product_id');
			$table->timestamps();
		});

		Schema::create('persons', function(Blueprint $table)
		{

			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('name');
			//$table->timestamps();
		});

		Schema::create('types', function(Blueprint $table)
		{

			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('type');
		});

		Schema::create('products', function(Blueprint $table)
		{

			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->integer('type_id');
			$table->string('name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quotes');
		Schema::drop('persons');
		Schema::drop('types');
		Schema::drop('products');
	}

}