<?php
/**
 *
 */
?>
<script type="text/javascript" src="/js/editTeam.js"></script>
<div class="modal fade team_data" id="team_edit" role="dialog" aria-labelledby="team_edit" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content text-center">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
	<img src="/img/modal_reg/close_icon.png">
</button>
<div class="window">
<h1>Изменить данные команды</h1>
<hr>
<?=
Form::open(array(
	'url'    => '/extramile',
	'method' => 'post',
	'files'  => true,
	'role'   => 'form'
)) ?>

<div class="row">
	<div class="form-group col-sm-6">

		<div class="field text-left">
			<?= Form::label('inputCompany', 'Компания/Company:', array('class' => 'control-label')) ?>

			<div class="">
				<?=
				Form::input('text', 'company', '', array(
					'placeholder' => '',
					'class'       => 'form-control',
					'id'          => 'inputCompany',
					'required'    => 'required',
				));
				?>
			</div>
			<div class="hidden">
				<?=
				Form::input('hidden', 'id', '', array(
					'class' => 'form-control',
					'id'    => 'inputId',
				));
				?>
			</div>
		</div>
		<div class="field text-left">
			<?= Form::label('inputPhone', 'Номер телефона/Phone number:', array('class' => 'control-label')) ?>

			<div class="">
				<?=
				Form::input('text', 'phone', '', array(
					'class'    => 'form-control',
					'id'       => 'inputPhone',
					'required' => 'required',
				));
				?>
			</div>
		</div>
	</div>
	<div class="form-group col-sm-6">
		<div class="field text-left">
			<?= Form::label('inputContactPerson', 'Контактное лицо/Contact person:', array('class' => 'control-label')) ?>

			<div class="">
				<?=
				Form::input('text', 'contactPerson', '', array(
					'placeholder' => '',
					'class'       => 'form-control',
					'id'          => 'inputContactPerson',
					'required'    => 'required',
				));
				?>
			</div>
		</div>
		<div class="field text-left">
			<?= Form::label('inputEmail', 'Эл.почта/E-mail:', array('class' => 'control-label')) ?>

			<div class="">
				<?=
				Form::input('email', 'email', '', array(
					'placeholder' => '',
					'class'       => 'form-control',
					'id'          => 'inputEmail',
					'required'    => 'required',
				));
				?>
			</div>
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="form-group col-sm-6">
		<div class="field text-left">
			<?= Form::label('inputCaptainName', 'Капитан команды/Captain’s name:', array('class' => 'control-label')) ?>

			<div class="">
				<?=
				Form::input('text', 'captainName', '', array(
					'placeholder' => '',
					'class'       => 'form-control',
					'id'          => 'inputCaptainName',
					'required'    => 'required',
				));
				?>
			</div>
		</div>
	</div>
	<div class="form-group col-sm-6">
		<div class="field text-left">
			<?= Form::label('inputTeamName', 'Название команды/Team name: ', array('class' => 'control-label')) ?>

			<div class="">
				<?=
				Form::input('text', 'teamName', '', array(
					'placeholder' => '',
					'class'       => 'form-control',
					'id'          => 'inputTeamName',
					'required'    => 'required',
				));
				?>
			</div>
		</div>
	</div>
</div>
<div class="row">

	<div class="only_label text-left col-sm-12">
		<?= Form::label('inputCrewman', 'Список участников/Team members list:', array('class' => 'control-label')) ?>
	</div>


	<div class="group_fields col-sm-6">
		<div class="text-left">
			<div class="">
				<?=
				Form::input('text', 'crewman1', '', array(
					'placeholder' => '',
					'class'       => 'form-control',
					'id'          => 'inputCrewman1',
					'required'    => 'required',
				));
				?>
			</div>
		</div>
		<div class="field text-left">
			<div class="">
				<?=
				Form::input('text', 'crewman2', '', array(
					'placeholder' => '',
					'class'       => 'form-control',
					'id'          => 'inputCrewman2',
					'required'    => 'required',
				));
				?>
			</div>
		</div>
		<div class="field text-left">
			<div class="">
				<?=
				Form::input('text', 'crewman3', '', array(
					'placeholder' => '',
					'class'       => 'form-control',
					'id'          => 'inputCrewman3',
					'required'    => 'required',
				));
				?>
			</div>
		</div>

	</div>

	<div class="group_fields col-sm-6">
		<div class="text-left">
			<div class="">
				<?=
				Form::input('text', 'crewman4', '', array(
					'placeholder' => '',
					'class'       => 'form-control',
					'id'          => 'inputCrewman4',
					'required'    => 'required',
				));
				?>
			</div>
		</div>
		<div class="field text-left">
			<div class="">
				<?=
				Form::input('text', 'crewman5', '', array(
					'placeholder' => '',
					'class'       => 'form-control',
					'id'          => 'inputCrewman5',
					'required'    => 'required',
				));
				?>
			</div>
		</div>
		<div class="field text-left">
			<div class="">
				<?=
				Form::input('text', 'crewman6', '', array(
					'placeholder' => '',
					'class'       => 'form-control',
					'id'          => 'inputCrewman6',
					'required'    => 'required',
				));
				?>
			</div>
		</div>

	</div>
</div>
<div class="row">
	<div class="form-group col-sm-6">
		<div class="field text-left">
			<?= Form::label('inputAboutTeam', 'О команде/About your team:', array('class' => 'control-label')) ?>

			<div class="">
				<?=
				Form::textarea('aboutTeam', '', array(
					'placeholder' => '',
					'class'       => 'form-control',
					'id'          => 'inputAboutTeam',
					'rows'        => '10',
				));
				?>
			</div>
		</div>
	</div>
	<div class="form-group col-sm-6">
		<div class="field text-center download_photo">
			<img class="img_photo img-rounded" src="">

			<?=
			Form::button('Изменить фото', array(
				'id'    => 'downloadPhoto',
				'class' => 'btn btn_download_photo',
			)); ?>
			<div class="file_name"></div>
			<?= Form::file('file') ?>
		</div>
	</div>
	<div class="form-group col-sm-6">
		<div class="field text-center download_photo">
			<img class="img_logo  img-rounded" src="">

			<?=
			Form::button('Изменить лого', array(
				'id'    => 'downloadLogo',
				'class' => 'btn btn_download_photo',
			)); ?>
			<div class="file_name"></div>
			<?= Form::file('logo') ?>
		</div>
	</div>
</div>
<div class="send_reg">
	<?=
	Form::button('Сохранить', array(
		'id'    => 'send_edit_data',
		'class' => 'btn btn-info btn_registration',
	)); ?>
</div>

<?= Form::close() ?>
</div>

</div>
</div>
</div>
