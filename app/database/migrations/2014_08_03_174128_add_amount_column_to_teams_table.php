<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddAmountColumnToTeamsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('teams', function (Blueprint $table) {
			$table->integer('amount')->after('teamName');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('teams', function (Blueprint $table) {
			$table->dropColumn('amount');
		});
	}

}
