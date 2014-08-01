<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignSectionIdToBlocksTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('blocks', function (Blueprint $table) {
			$table->index('section_id');
			$table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');

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
			$table->dropForeign('blocks_section_id_foreign');
			$table->dropIndex('blocks_section_id_index');
		});
	}

}
