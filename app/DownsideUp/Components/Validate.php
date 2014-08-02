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
			'block' => 'required|alpha_dash|unique:blocks,block,' . $blockId . ',id,section_id,' . $sectionId,
			'blockName'    => 'required',
			'blockContent' => 'required',
		];

		return $rules;
	}
}