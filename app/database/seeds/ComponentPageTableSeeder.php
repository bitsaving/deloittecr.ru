<?php


class ComponentPageTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('component_page')->truncate();

		$component_page = array(
			array('component_id' => 1, 'page_id' => 1),
		);

		DB::table('component_page')->insert($component_page);
	}

}