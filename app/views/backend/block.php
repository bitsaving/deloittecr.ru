<?php
/**
 * @var string $block
 * @var string $blockName
 * @var string $blockContent
 * @var array  $images
 * @var Image  $image
 * @var string $page
 * @var string $section
 * @var string $blockId
 */
use DownsideUp\Models\Image;

$block = isset($block) ? $block : '';
$blockName = isset($blockName) ? $blockName : '';
$blockContent = isset($blockContent) ? $blockContent : '';

$url = '/backend/pages/' . $page . '/sections/' . $section . '/change/' . $blockId;
?>
<script type="text/javascript" src="/packages/damnUploader/jquery.damnUploader.min.js"></script>
<script src="/packages/damnUploader/interafce.js"></script>
<script src="/packages/damnUploader/uploader-setup.js"></script>
<div class="container-fluid">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li class="active"><a href="#block_editor" role="tab" data-toggle="tab">Сохранить данные</a></li>
		<li><a href="#list_image" role="tab" data-toggle="tab">Список изображений</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">

		<div class="tab-pane active blockEditor" id="block_editor">
			<?=
			Form::open(array(
				'url'    => $url,
				'class'  => 'form-horizontal',
				'role'   => 'form',
				'method' => 'post',
				'id'     => 'form_block',
			)); ?>
			<div class="form-group">
				<?= Form::label('inputBlock', 'Название', array('class' => 'col-sm-2 control-label')) ?>

				<div class="col-sm-10">

					<?=
					Form::input('text', 'block', $block, array(
						'class' => 'form-control',
						'id'    => 'inputBlock',
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
						'class' => 'form-control',
						'id'    => 'inputBlockName',

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
				<?= Form::label('inputFile', 'Загрузить', array('class' => 'col-sm-2 control-label')) ?>

				<div class="col-sm-10" id="fileUploader">
					<div class="well well-lg auto-tip" id="drop-box">
						<div class="form-group">
							<input type="file" class="form-control auto-tip" id="file-input" name="image" data-title="" data-original-title="" title="">
						</div>
						<div class="checkbox">
							Или перетащить файл сюда
						</div>

					</div>
				</div>
				<div id="errorBlockContent" class="col-sm-offset-2 text-danger text-center"></div>
			</div>
			<div class="form-group">
				<?= Form::label('inputFile', 'Очередь загрузки', array('class' => 'col-sm-2 control-label')) ?>
				<div class="col-sm-10">
					<table class="table">
						<thead>
						<tr>
							<th>Preview</th>
							<th>Original filename</th>
							<th>Size</th>
							<th>Status</th>
							<th></th>
						</tr>
						</thead>
						<tbody id="upload-rows"></tbody>
					</table>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-1 text-center">
					<?=
					Form::button('Сохранить', array(
						'class'   => 'btn btn-success',
						'id'      => 'btn_save',
						'data-id' => $blockId,
					));
					?>
				</div>
			</div>
			<?= Form::close(); ?>

		</div>
		<div class="tab-pane" id="list_image">
			<?php foreach ($images as $image) : ?>
				<div class="row" id="edit_image_<?= $image->id ?>">
					<div class="col-sm-2">
						<img src="<?= $image->image ?>" class="img-rounded">
					</div>
					<div class="col-sm-7">
						<?=
						Form::input('text', 'ContentImage', $image->content, array(
							'class' => 'ContentImage form-control',
						));
						?>
						<?=
						Form::button('Удалить изображение', array(
							'class'   => 'btn btn-danger btn_del_image',
							'data-id' => $image->id,
						));
						?>
					</div>
					<div class="col-sm-3">
						<?=
						Form::button('Сохранить ссылку', array(
							'class'   => 'btn btn-success btn_save_content',
							'data-id' => $image->id,
						));
						?>

					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>