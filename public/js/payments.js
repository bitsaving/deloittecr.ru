$(document).ready(function () {

	$(document).on('click', '.btnEditPayment', function () {
		var payment = $(this).data('payment');
		var newPaymentModal = $('#paymentModal');
		/** @namespace payment.team_id */
		newPaymentModal.find('input[name=paymentId]').val(payment.id);
		newPaymentModal.find('input[name=teamId]').val(payment.team_id);
		newPaymentModal.find('input[name=payer]').val(payment.payer);
		newPaymentModal.find('input[name=payment]').val(payment.payment);
		newPaymentModal.find('input[name=amount]').val(payment.amount);
	});

	$('.btnSavePayment').click(function () {
		var paymentId = $('input[name=paymentId]').val();
		var teamId = $('input[name=teamId]').val();
		var payer = $('input[name=payer]').val();
		var payment = $('input[name=payment]').val();
		var amount = $('input[name=amount]').val();
		$('.has-error').removeClass('has-error');
		$.post('newPayment', {paymentId: paymentId, teamId: teamId, payer: payer, payment: payment, amount: amount})
			.error(function () {
				alert('Какая-то ошибка, перезагрузите страницу')
			})
			.complete(function () {
				$('button').attr("disable", false);
			})
			.success(function (response) {
				if (response['errors']) {
					var obj = response['errors'];
					for (var prop in obj) {
						if (obj[prop]) {
							$('input[name=' + prop + ']').parent().parent().addClass('has-error')
						}
					}
					return
				}
				alert(response);
				location.reload();
			})
	});

	$('#paymentModal').on('hidden.bs.modal', function () {
		$(this).find('input').val('');
		$(this).find('.has-error').removeClass('has-error');
		$(this).find('input[name=teamId]').attr('disabled', false);
	})
});