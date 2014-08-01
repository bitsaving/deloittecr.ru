<?php

namespace DownsideUp\Components;


use DownsideUp\Models\Page;

class Helper
{

	/**
	 * @return Page[]
	 */
	public static function getPages()
	{
		return Page::get()->all();
	}
} 