$(document).ready(function () {

	$('button.get_payments_table').click({x: 0}, function (e) {
		if (e.data.x != this) {
			$('button.get_payments_table').attr('disabled', true);
			if (e.data.x) {
				$(e.data.x)
					.closest('tr')
					.removeClass('active')
					.next()
					.find('.paymentsForTeam')
					.slideUp(500, function () {
						$(this).closest('tr').remove();
					});
			}
			var $btn = $(this);
			var $act = $btn.closest('tr').addClass('active');

			$.post(
				'teams/paymentsForTeam',
				{ teamId: $btn.data('team-id') },
				function (data) {
					if (data['errors']) {
						$('button').attr('disabled', false);
						$act.after('<tr class="active inside"><td colspan="4"></td><td colspan="7" style="border-top: 1px solid black;"><div class="paymentsForTeam"><b>' + data['errors']['event_id'] + '</b></div></td></tr>')
							.next()
							.find('.paymentsForTeam')
							.slideDown(500);
						return;
					}
					$('button.get_payments_table').attr('disabled', false);
					$act.after('<tr class="active"><td colspan="4"></td><td colspan="7" style="border-top: 1px solid black;"><div class="paymentsForTeam">' + data + '</div></td></tr>')
						.next()
						.find('.paymentsForTeam')
						.slideDown(500);
				});

			e.data.x = this;
		} else {
			$(e.data.x)
				.closest('tr')
				.removeClass('active')
				.next()
				.find('.paymentsForTeam')
				.slideUp(500, function () {
					$(this).closest('tr').remove();
				});
			e.data.x = false;
		}
	});

	$('.btnNewPayment').click(function () {
		var teamId = $(this).data('team-id');
		var newPaymentModal = $('#paymentModal');
		newPaymentModal.find('input[name=teamId]').val(teamId).attr('disabled', true);
	});

});