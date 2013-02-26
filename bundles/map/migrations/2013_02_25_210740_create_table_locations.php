<?php

class Map_Create_Table_Locations {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function($table){
			$table->increments('id');
			$table->float('latitude');
			$table->float('longitude');
			$table->timestamps();
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