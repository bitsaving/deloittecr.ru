<?php
/**
 * @var Payment $payments
 * @var Payment $payment
 */
use DownsideUp\Models\Payment;

/*echo View::make('backend.inc.editPaymentModal');*/

if (isset($team)) {
	echo View::make('backend.inc.newPaymentModal');

	Form::button('Новая команда', array(
		'class'       => 'btn btn-sm btn-info btnNewTeam',
		'data-toggle' => 'modal',
		'data-target' => '#team_new',
	));
} ?>
	<table class="table table-striped table-hover" id="teamsTable">
		<tr>
			<td><b>ID</b></td>
			<td><b>ID Команы</b></td>
			<td><b>Плательщик</b></td>
			<td><b>Платёж</b></td>
			<td><b>Сумма</b></td>
			<td><b>Действия</b></td>
		</tr>
		<?php foreach ($payments as $payment): ?>
			<tr>
				<td><?= $payment->id ?></td>
				<td><?= $payment->team_id ?></td>
				<td><?= $payment->payer ?></td>
				<td><?= $payment->payment ?></td>
				<td><?= $payment->amount ?></td>
				<td>
					<?=
					Form::button('Изменить', array(
						'class'        => 'btn btn-sm btn-info btnEdit',
						'data-payment' => $payment,
						'data-toggle'  => 'modal',
						'data-target'  => '#team_edit',
					)) ?>
				</td>
			</tr>
		<?php endforeach ?>

	</table>
<?= $payments->links() ?>