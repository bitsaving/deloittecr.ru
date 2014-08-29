<?php
/**
 * @var Payment $payments
 * @var Payment $payment
 */
use DownsideUp\Models\Payment;

echo View::make('backend.inc.paymentModal');

?>
<script type="text/javascript" src="/js/payments.js"></script>
<div class="payments">
	<h1 class="text-center">Платежи</h1>
	<?=
	Form::button('Новый общий платёж', array(
		'class'       => 'btn btn-info btnNewPayment',
		'data-toggle' => 'modal',
		'data-target' => '#paymentModal',
	)) ?>

	<table class="table table-striped table-hover">
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
						'class'        => 'btn btn-sm btn-info btnEditPayment',
						'data-payment' => $payment,
						'data-toggle'  => 'modal',
						'data-target'  => '#paymentModal',
					)) ?>
				</td>
			</tr>
		<?php endforeach ?>

	</table>
	<?= $payments->links() ?>
</div>
