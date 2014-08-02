<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teams', function (Blueprint $table) {
			$table->increments('id');
			$table->string('company');
			$table->string('phone');
			$table->string('contactPerson');
			$table->string('email')->unique();
			$table->string('captainName');
			$table->string('teamName');
			$table->string('crewman1');
			$table->string('crewman2');
			$table->string('crewman3');
			$table->string('crewman4');
			$table->string('crewman5')->nullable();
			$table->string('crewman6')->nullable();
			$table->text('aboutTeam')->nullable();
			$table->text('photo');
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
		Schema::drop('teams');
	}

}
