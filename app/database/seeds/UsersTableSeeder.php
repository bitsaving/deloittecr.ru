<?php


class UsersTableSeeder extends Seeder
{

	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints
		DB::table('users')->truncate();

		$users = array(
			array(
				'username'   => 'admin',
				'email'      => 'admin@admin.com',
				'password'   => Hash::make('1234'),
				'updated_at' => DB::raw('NOW()'),
				'created_at' => DB::raw('NOW()'),
			)
		);

		DB::table('users')->insert($users);
		DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints
	}

}