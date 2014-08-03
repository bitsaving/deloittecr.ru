<?php
/**
 * @var Page      $oPage
 * @var Component $oComponent
 */
use DownsideUp\Models\Component;
use DownsideUp\Models\Page;

?>


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2">
			<div class="sections_menu vertical_menu text-right navbar-default" role="navigation">
				<ul class="nav navbar-nav">
					<li class="">
						<a href="<?= URL::current() . '/sections' ?>">Разделы страницы</a>
					</li>
					<?php foreach ($oPage->components as $oComponent) : ?>
						<li class="">
							<a href="<?= URL::current() . '/components/' . $oComponent->component ?>"><?= $oComponent->component_name ?></a>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
	</div>
</div>