<?php namespace DownsideUp\Widget;


use DownsideUp\Models\Component;
use View;

class ExtraMileWidget
{

	public static function getTeamsForCarousel($arg)
	{
		$teams = self::sortTeam($arg);

		return View::make('extraMile.teams_list.teamsCarousel', ['teams' => $teams]);
	}

	public static function sortTeam($arg)
	{
		if ($arg == 'amount') {
			$teams = Component::whereComponent('teams')
				->first()
				->teams()
				->whereActive(true)
				->orderBy($arg, 'desc')
				->get()
				->all();
		} else {
			$teams = Component::whereComponent('teams')
				->first()
				->teams()
				->whereActive(true)
				->orderBy($arg)
				->get()
				->all();
		}

		return $teams;
	}

	public static function getMaxAmount()
	{
		$teams = self::sortTeam('amount');
		if (!$teams) {
			$maxAmount = 100;
		} else {

			$maxAmount = $teams[0]->amount;
			if ($maxAmount <= 0) {
				$maxAmount = 100;
			}
		}

		return $maxAmount;
	}
} 