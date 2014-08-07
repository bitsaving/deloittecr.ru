<?php


class ComponentsTableSeeder extends Seeder
{

	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints
		DB::table('components')->truncate();

		$components = array(
			array(
				'component'      => 'teams',
				'component_name' => 'Команды',
				'content'        => '',
				'updated_at'     => DB::raw('NOW()'),
				'created_at'     => DB::raw('NOW()'),
			),
			array(
				'component'      => 'payments',
				'component_name' => 'Платежи',
				'content'        => '',
				'updated_at'     => DB::raw('NOW()'),
				'created_at'     => DB::raw('NOW()'),
			),
		);

		DB::table('components')->insert($components);
		DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints
	}
}

