<?php

class Map_Create_Table_Reports {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reports', function($table){
			$table->increments('id');
			$table->string('title');
			$table->string('description');
			$table->string('photo');
			$table->integer('location_id')->unsigned();
			$table->timestamps();

			$table->foreign('location_id')->references('id')->on('locations')->on_delete('cascade');
		});



	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}