<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddImgColumnsToBlocksTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('blocks', function (Blueprint $table) {
			$table->string('img')->after('content')->nullable();
			$table->string('url')->after('img')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('blocks', function (Blueprint $table) {
			$table->dropColumn('img');
			$table->dropColumn('url');
		});
	}

}
