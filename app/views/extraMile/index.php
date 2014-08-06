<?php
/**
 * @var array $sections
 * @var array $teams
 */

use DownsideUp\Models\Block;

echo View::make('extramile.teamCard');
foreach ($sections as $oSection) {
	$blocks = $oSection->blocks;
	$aBlock = [];
	/**
	 * @var Block $oBlock
	 */
	foreach ($blocks as $oBlock) {
		$aBlock[$oBlock->block] = $oBlock->content;
		if ($images = $oBlock->images()->get()->all()) {
			$aBlock[$oBlock->block] = $images;
		}
	}

	echo View::make('extraMile.' . $oSection->section, $aBlock)->with(['teams' => $teams]);
}


