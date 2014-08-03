<?php

namespace DownsideUp\Components;


use Validator;

class Validate
{

	private static function getMessages()
	{
		$messages = array(
			'required'   => 'Поле должно быть заполнено',
			'regex'      => 'Некорректный формат данных',
			'url'        => 'Некорректный адрес',
			'alpha_dash' => 'Только буквы, цифры, тире и подчёткивания',
			'unique'     => 'В этой секции такой блок уже есть',
		);

		return $messages;
	}

	public static function getBlockError($data, $sectionId, $blockId)
	{
		$validator = Validator::make($data, self::rulesBlock($sectionId, $blockId), self::getMessages());
		$userMessages = $validator->messages();
		if ($validator->fails()) {
			$result['errors'] = array(
				'block'        => $userMessages->first('block'),
				'blockName'    => $userMessages->first('blockName'),
				'blockContent' => $userMessages->first('blockContent'),
			);

			return $result;
		}

		return null;
	}

	private static function rulesBlock($sectionId, $blockId)
	{
		$rules = [
			'block'        => 'required|alpha_dash|unique:blocks,block,' . $blockId . ',id,section_id,' . $sectionId,
			'blockName'    => 'required',
			'blockContent' => '',
		];

		return $rules;
	}

	public static function getTeamRegError($data)
	{
		$validator = Validator::make($data, self::rulesRegTeam(), self::getMessages());
		$userMessages = $validator->messages();
		if ($validator->fails()) {
			$result['errors'] = array(
				'company'       => $userMessages->first('company'),
				'phone'         => $userMessages->first('phone'),
				'contactPerson' => $userMessages->first('contactPerson'),
				'email'         => $userMessages->first('email'),
				'captainName'   => $userMessages->first('captainName'),
				'teamName'      => $userMessages->first('teamName'),
				'crewman1'      => $userMessages->first('crewman1'),
				'crewman2'      => $userMessages->first('crewman2'),
				'crewman3'      => $userMessages->first('crewman3'),
				'crewman4'      => $userMessages->first('crewman4'),
				'crewman5'      => $userMessages->first('crewman5'),
				'crewman6'      => $userMessages->first('crewman6'),
				'aboutTeam'     => $userMessages->first('aboutTeam'),
				'file'          => $userMessages->first('file'),
			);
			if ($userMessages->first('email') == 'В этой секции такой блок уже есть') {
				$result['errors']['textError'] = 'Такой email уже зарегистрирован';
			}
			if ($userMessages->first('email') == 'В этой секции такой блок уже есть') {
				$result['errors']['textError'] = 'Такое название команды уже есть';
			}

			return $result;
		}

		return null;
	}

	private static function rulesRegTeam()
	{
		$rules = [
			'company'       => 'required',
			'phone'         => 'required',
			'contactPerson' => 'required',
			'email'         => 'required|email|unique:teams,email',
			'captainName'   => 'required',
			'teamName'      => 'required|unique:teams,teamName',
			'crewman1'      => 'required',
			'crewman2'      => 'required',
			'crewman3'      => 'required',
			'crewman4'      => 'required',
			'crewman5'      => '',
			'crewman6'      => '',
			'aboutTeam'     => '',
			'file'          => 'required|image|mimes:jpeg,bmp,png',
		];

		return $rules;
	}

	public static function getTeamEditError($data, $teamId)
	{
		$validator = Validator::make($data, self::rulesEditTeam($teamId), self::getMessages());
		$userMessages = $validator->messages();
		if ($validator->fails()) {
			$result['errors'] = array(
				'email'    => $userMessages->first('email'),
				'teamName' => $userMessages->first('teamName'),
				'file'     => $userMessages->first('file'),
			);
			if ($userMessages->first('email') == 'В этой секции такой блок уже есть') {
				$result['errors']['textError'] = 'Такой email уже зарегистрирован';
			}
			if ($userMessages->first('email') == 'В этой секции такой блок уже есть') {
				$result['errors']['textError'] = 'Такое название команды уже есть';
			}

			return $result;
		}

		return null;
	}

	private static function rulesEditTeam($teamId)
	{
		$rules = [
			'email'    => 'email|unique:teams,email,' . $teamId,
			'teamName' => 'required|unique:teams,teamName,' . $teamId,
			'file'     => 'image|mimes:jpeg,bmp,png',
		];

		return $rules;
	}
}