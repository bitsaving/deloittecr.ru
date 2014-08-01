<?php

namespace DownsideUp\Components;


use Config;
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

	public static function getBlockError($data, $sectionId)
	{
		$validator = Validator::make($data, self::rulesBlock($sectionId), self::getMessages());
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

	private static function rulesBlock($sectionId)
	{
		$rules = [
			'block'        => 'required|alpha_dash|unique:'
				. Config::get('database.connections.mysql.database')
				. ',block,NULL,id,section_id,' . $sectionId,
			'blockName'    => 'required',
			'blockContent' => 'required',
		];

		return $rules;
	}
}