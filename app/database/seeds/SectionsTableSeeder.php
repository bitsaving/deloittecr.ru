<?php


class SectionsTableSeeder extends Seeder
{

	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints
		DB::table('sections')->truncate();

		$roles = array(
			array(
				'section'      => 'title',
				'section_name' => 'Шапка',
				'updated_at'   => DB::raw('NOW()'),
				'created_at'   => DB::raw('NOW()')
			),
			array(
				'section'      => 'links',
				'section_name' => 'Ссылки',
				'updated_at'   => DB::raw('NOW()'),
				'created_at'   => DB::raw('NOW()')
			),
			array(
				'section'      => 'big_menu',
				'section_name' => 'Общее меню',
				'updated_at'   => DB::raw('NOW()'),
				'created_at'   => DB::raw('NOW()')
			),
			array(
				'section'      => 'fund_raising',
				'section_name' => 'Сбор средств',
				'updated_at'   => DB::raw('NOW()'),
				'created_at'   => DB::raw('NOW()')
			),
			array(
				'section'      => 'team_list',
				'section_name' => 'Список команд',
				'updated_at'   => DB::raw('NOW()'),
				'created_at'   => DB::raw('NOW()')
			),
			array(
				'section'      => 'race_stages',
				'section_name' => 'Этапы гонки',
				'updated_at'   => DB::raw('NOW()'),
				'created_at'   => DB::raw('NOW()')
			),
			array(
				'section'      => 'rules_register',
				'section_name' => 'Правила и регистрация',
				'updated_at'   => DB::raw('NOW()'),
				'created_at'   => DB::raw('NOW()')
			),
			array(
				'section'      => 'map',
				'section_name' => 'Схема проезда',
				'updated_at'   => DB::raw('NOW()'),
				'created_at'   => DB::raw('NOW()')
			),
			array(
				'section'      => 'history',
				'section_name' => 'История Extra Mile',
				'updated_at'   => DB::raw('NOW()'),
				'created_at'   => DB::raw('NOW()')
			),
			array(
				'section'      => 'partners',
				'section_name' => 'Наши партнёры',
				'updated_at'   => DB::raw('NOW()'),
				'created_at'   => DB::raw('NOW()')
			),
			array(
				'section'      => 'about_downside_up',
				'section_name' => 'О Downside Up',
				'updated_at'   => DB::raw('NOW()'),
				'created_at'   => DB::raw('NOW()')
			),
			array(
				'section'      => 'footer',
				'section_name' => 'Подвал',
				'updated_at'   => DB::raw('NOW()'),
				'created_at'   => DB::raw('NOW()')
			),

		);

		DB::table('sections')->insert($roles);
		DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints
	}

}