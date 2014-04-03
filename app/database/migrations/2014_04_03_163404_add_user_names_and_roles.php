<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserNamesAndRoles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		// Add column to posts table
		Schema::table('users', function($table)
		{
		    $table->string('first_name', 50);
		    $table->string('last_name', 50);
		    $table->integer('role_id')->unsigned();

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
		Schema::table('users', function($table)
		{
			 $table->dropColumn('first_name');
			 $table->dropColumn('last_name');
			 $table->dropColumn('role_id');
	    });
	}

}
