<?php


class PageSectionTableSeeder extends Seeder
{

	public function run()
	{

		DB::table('page_section')->truncate();

		$role_user = array(
			array('page_id' => 1, 'section_id' => 1),
			array('page_id' => 1, 'section_id' => 2),
			array('page_id' => 1, 'section_id' => 3),
			array('page_id' => 1, 'section_id' => 4),
			array('page_id' => 1, 'section_id' => 5),
			array('page_id' => 1, 'section_id' => 6),
			array('page_id' => 1, 'section_id' => 7),
			array('page_id' => 1, 'section_id' => 8),
			array('page_id' => 1, 'section_id' => 9),
			array('page_id' => 1, 'section_id' => 10),
			array('page_id' => 1, 'section_id' => 11),
			array('page_id' => 1, 'section_id' => 12),
			array('page_id' => 1, 'section_id' => 13),
		);

		DB::table('page_section')->insert($role_user);

	}

}