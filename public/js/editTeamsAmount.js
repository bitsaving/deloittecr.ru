$(document).ready(function () {
	$('.get_payments_table').click(function () {
		var teamId = $(this).data('team-id');
		$.get('/extramile/getPaymentsForTeam', {teamId: teamId})

	});

});