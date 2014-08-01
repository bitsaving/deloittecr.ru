<?php

class DatabaseSeeder extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();


		$this->call('SectionsTableSeeder');
		$this->call('RoleUserTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('BlocksTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('PagesTableSeeder');
		$this->call('PageSectionTableSeeder');
	}

}
