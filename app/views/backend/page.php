<?php
/**
 * @var $oPage Page
 */
use DownsideUp\Models\Page;

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2">
			<?= View::make('backend.inc.sectionsNavbar', ['oPage' => $oPage]) ?>
		</div>
	</div>
</div>