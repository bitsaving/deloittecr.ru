<?php


class RoleUserTableSeeder extends Seeder
{

	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // enable foreign key constraints
		DB::table('role_user')->truncate();

		$role_user = array(
			array('user_id' => 1, 'role_id' => 1)
		);

		DB::table('role_user')->insert($role_user);
		DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints
	}

}