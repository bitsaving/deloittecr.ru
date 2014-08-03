<?php
/**
 * @var $oPage    Page
 * @var $oSection Section
 */
use DownsideUp\Models\Page;
use DownsideUp\Models\Section;

$sections = $oPage->sections;
$page = $oPage->page;

?>

<div class="sections_menu vertical_menu text-right navbar-default" role="navigation">
	<ul class="nav navbar-nav">
		<?php foreach ($sections as $oSection) : ?>
			<?php $url = URL::route('pages') . '/' . $page . '/sections/' . $oSection->section ?>
			<li class="<?= URL::current() == $url ? 'active' : '' ?>">
				<a href="<?= $url ?>"><?= $oSection->section_name ?> </a>
			</li>
		<?php endforeach ?>
	</ul>
</div>
