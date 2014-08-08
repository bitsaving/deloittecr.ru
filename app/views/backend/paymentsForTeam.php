<?php
/**
 * @var Payment $payments
 * @var Payment $payment
 */
use DownsideUp\Models\Payment;


?>
<div>
	<table class="table table-striped table-hover" id="paymentsTable">
		<tr>
			<td><b>ID</b></td>
			<td><b>Плательщик</b></td>
			<td><b>Платёж</b></td>
			<td><b>Сумма</b></td>
			<td><b>Действия</b></td>
		</tr>
		<?php foreach ($payments as $payment): ?>
			<tr>
				<td><?= $payment->id ?></td>
				<td><?= $payment->payer ?></td>
				<td><?= $payment->payment ?></td>
				<td><?= $payment->amount ?></td>
				<td>
					<?=
					Form::button('Изменить платёж', array(
						'class'        => 'btn btn-sm btn-info btnEditPayment',
						'data-payment' => $payment,
						'data-toggle'  => 'modal',
						'data-target'  => '#paymentModal',
					)) ?>
				</td>
			</tr>
		<?php endforeach ?>

	</table>
</div>
