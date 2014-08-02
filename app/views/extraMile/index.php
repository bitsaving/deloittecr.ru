<?php
/**
 * @var $partners array
 */

use DownsideUp\Models\Block;

foreach ($sections as $oSection) {
	$blocks = $oSection->blocks;
	$aBlock = [];
	/**
	 * @var Block $oBlock
	 */
	foreach ($blocks as $oBlock) {
		$aBlock[$oBlock->block] = $oBlock->content;
	}

	echo View::make('extraMile.' . $oSection->section, $aBlock);
}


