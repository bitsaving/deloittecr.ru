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
		<div class="col-sm-2">
			<div class="blocks_menu text-center" role="navigation">
				<ul class="nav navbar-nav">
					<li>
						<?=
						Form::button('Новый блок', array(
							'id'    => 'btn_new_block',
							'class' => 'btn btn-info text-center'
						))?>
					</li>
					<?php foreach ($blocks as $oBlock) : ?>
						<?php $url = URL::route('pages') . '/' . $page . '/' . $oSection->section . '/' . $oBlock->block ?>
						<li class="<?= URL::current() == $url ? 'active' : '' ?>">
							<a href="" data-action="<?= $oBlock->block ?>"><?= $oBlock->block_name ?> </a>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>

	</div>
</div>