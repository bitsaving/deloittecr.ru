<?php
/**
 * @var string $block
 * @var string $blockName
 * @var string $blockContent
 */
$block = isset($block) ? $block : '';
$blockName = isset($blockName) ? $blockName : '';
$blockContent = isset($blockContent) ? $blockContent : '';
$blockId = isset($blockId) ? $blockId : 'newBlock';


?>

<div class="container-fluid">
	<div class="blockEditor">
		<?=
		Form::open(array(
			'url'    => 'newBlock',
			'class'  => 'form-horizontal',
			'role'   => 'form',
			'method' => 'post',

		)); ?>
		<div class="form-group">
			<?= Form::label('inputBlock', 'Название', array('class' => 'col-sm-2 control-label')) ?>

			<div class="col-sm-10">

				<?=
				Form::input('text', 'block', $block, array(
					'class'    => 'form-control',
					'id'       => 'inputBlock',
					'required' => true,
				));
				?>
			</div>
			<div id="errorBlock" class="col-sm-offset-2 text-danger text-center"></div>
		</div>
		<div class="form-group">
			<?= Form::label('inputBlockName', 'На русском', array('class' => 'col-sm-2 control-label')) ?>

			<div class="col-sm-10">
				<?=
				Form::input('text', 'blockName', $blockName, array(
					'class'    => 'form-control',
					'id'       => 'inputBlockName',
					'required' => true,
				));
				?>
			</div>
			<div id="errorBlockName" class="col-sm-offset-2 text-danger text-center"></div>
		</div>
		<div class="form-group">
			<?= Form::label('inputBlockContent', 'Содержимое', array('class' => 'col-sm-2 control-label')) ?>

			<div class="col-sm-10">
				<?=
				Form::textarea('blockContent', $blockContent, array(
					'class' => 'form-control',
					'id'    => 'inputBlockContent',
					'rows'  => '5',
				));
				?>
			</div>
			<div id="errorBlockContent" class="col-sm-offset-2 text-danger text-center"></div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 text-center">
				<?=
				Form::button('Сохранить', array(
					'type'    => 'button',
					'class'   => 'btn btn-success',
					'id'      => 'btn_save',
					'data-id' => $blockId,
				));
				?>
			</div>
		</div>
		<?= Form::close(); ?>

	</div>
</div>