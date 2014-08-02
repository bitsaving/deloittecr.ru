<?php
/**
 * @var $oPage    Page
 * @var $oSection Section
 * @var $oBlock   Block
 */
use DownsideUp\Models\Block;
use DownsideUp\Models\Page;
use DownsideUp\Models\Section;

$blocks = $oSection->blocks;

?>
<script src="/packages/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/js/backendBlocks.js"></script>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2">
			<?= View::make('backend.inc.sectionsNavbar', ['oPage' => $oPage]) ?>
		</div>
		<div id="block_zone" class="col-sm-8">

		</div>
		<div class="col-sm-2" role="navigation">
			<div class=" navbar-default blocks_menu vertical_menu text-left">
				<ul class="nav navbar-nav">
					<li>
						<?=
						Form::button('Новый блок', array(
							'id'    => 'btn_new_block',
							'class' => 'btn btn-info text-center'
						))?>
					</li>
					<?php foreach ($blocks as $oBlock) : ?>
						<li class="">
							<a href="" class="get_block" data-id="<?= $oBlock->id ?>"><?= $oBlock->block_name ?> </a>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>

	</div>
</div>