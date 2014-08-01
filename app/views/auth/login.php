<?php

$errors = Session::get('errors');

?>

<div class="text-center" style="margin: 15% 35%">
	<div class="login">
		<?=
		Form::open(array(
			'action' => 'signIn',
			'class'  => 'form-horizontal',
			'role'   => 'form',
			'method' => 'post',

		)); ?>
		<div class="form-group">
			<?= Form::label('inputName', 'Имя', array('class' => 'col-sm-3 control-label')) ?>

			<div class="col-sm-9">

				<?=
				Form::input('text', 'name', '', array(
					'placeholder' => 'Имя',
					'class'       => 'form-control',
					'id'          => 'inputName',
					'required'    => 'required',
				));
				?>
			</div>
		</div>
		<div class="form-group">
			<?= Form::label('inputPassword', 'Пароль', array('class' => 'col-sm-3 control-label')) ?>

			<div class="col-sm-9">
				<?=
				Form::input('password', 'password', '', array(
					'placeholder' => 'Пароль',
					'class'       => 'form-control',
					'id'          => 'inputPassword',
					'required'    => 'required',
				));
				?>
			</div>
		</div>
		<div id="error" class="text-danger text-center"><?= $errors ?></div>
		<div class="form-group">
			<div class="col-sm-offset-5 col-sm-5 checkbox">
				<label class="">
					<?= Form::checkbox('remember', 'true'); ?>Запомнить меня </label>
			</div>
			<div id="errorPassword" class="error text-center"></div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-3">
				<?=
				Form::button('SignIn', array(
					'type'  => 'submit',
					'class' => 'btn btn-primary',
					'id'    => 'btn_sign_in',
				));
				?>
			</div>
		</div>
		<?= Form::close(); ?>

	</div>
</div>