<?php


class PagesTableSeeder extends Seeder
{

	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints
		DB::table('pages')->truncate();

		$users = array(
			array(
				'page'       => 'extramile',
				'page_name'  => 'Extra Mile 2014',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			)
		);

		DB::table('pages')->insert($users);
		DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints
	}

}