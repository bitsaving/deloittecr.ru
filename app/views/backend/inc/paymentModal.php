<?php
/**
 * @var string $text_registration
 */
?>
<div class="modal fade team_data" id="paymentModal" role="dialog" aria-labelledby="registration" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content text-center">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				<img src="/img/modal_reg/close_icon.png">
			</button>
			<div class="window">
				<h1>Новый платёж</h1>

				<hr>
				<?=
				Form::open(array(
					'url'    => 'newPayment',
					'method' => 'post',
					'role'   => 'form'
				)) ?>
				<div class="">

					<div class="form-group field row text-right">
						<?= Form::label('inputTeamId', 'ID Команды:', array('class' => 'control-label col-sm-4')) ?>

						<div class="col-sm-8">
							<?=
							Form::input('text', 'teamId', '', array(
								'placeholder' => 'Если общий платёж то 0',
								'class'       => 'form-control',
								'id'          => 'inputPayer',
								'required'    => 'inputTeamId',
							));
							?>
						</div>
					</div>
					<div class="form-group field row text-right">
						<?= Form::label('inputPayer', 'Плательщик:', array('class' => 'control-label col-sm-4')) ?>

						<div class="col-sm-8">
							<?=
							Form::input('text', 'payer', '', array(
								'class'    => 'form-control',
								'id'       => 'inputPayer',
								'required' => 'required',
							));
							?>
						</div>
					</div>
					<div class="form-group field row text-right">
						<?= Form::label('inputPayment', 'Информация платежа:', array('class' => 'control-label col-sm-4')) ?>

						<div class="col-sm-8">
							<?=
							Form::input('text', 'payment', '', array(
								'class' => 'form-control',
								'id'    => 'inputPayment',
							));
							?>
						</div>
					</div>
					<div class="form-group field row text-right">
						<?= Form::label('inputAmount', 'Сумма:', array('class' => 'control-label col-sm-4')) ?>

						<div class="col-sm-8">
							<?=
							Form::input('text', 'amount', '', array(
								'class'    => 'form-control',
								'id'       => 'inputAmount',
								'required' => 'required',
							));
							?>
						</div>
					</div>
					<?=
					Form::button('Сохранить', array(
						'class' => 'btn btn-info btnSavePayment',
					)) ?>

				</div>

			</div>

			<?= Form::close() ?>
		</div>

	</div>
</div>
