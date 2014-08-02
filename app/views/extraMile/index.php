<?php
/**
 * @var $partners array
 */

use DownsideUp\Models\Block;

echo View::make('extraMile.modals.registration');

foreach ($sections as $oSection) {
	$blocks = $oSection->blocks;
	$aBlock = [];
	/**
	 * @var Block $oBlock
	 */
	foreach ($blocks as $oBlock) {
		$aBlock[$oBlock->block] = $oBlock->content;
	}
	/*	dd($aBlock);*/
	echo View::make('extraMile.' . $oSection->section, $aBlock);
}


