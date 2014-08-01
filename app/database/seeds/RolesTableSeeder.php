<?php

class RolesTableSeeder extends Seeder
{

	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints
		DB::table('roles')->truncate();

		$roles = array(
			array(
				'role'       => 'admin',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()')
			),
			array(
				'role'       => 'moderator',
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()')
			)

		);

		DB::table('roles')->insert($roles);
		DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints
	}

}