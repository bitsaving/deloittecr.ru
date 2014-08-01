$(document).ready(function () {
	$('#btn_new_block').click(function () {
		$.get(location.href + '/newBlock', '', function (data) {
			var $blockZone = $('#block_zone');
			$blockZone.html(data);
			CKEDITOR.replace('inputBlockContent');
			$blockZone.animate({opacity: "1"}, 'slow');

		});
	});
	var block_zone = $('#block_zone');
	block_zone.on('click', '#btn_save', function () {
		var blockId = $('#btn_save').data('id');
		var block = $('#inputBlock').val();
		var blockName = $('#inputBlockName').val();
		var blockContent = $('#inputBlockContent').val();

		var url = location.href + '/change/' + blockId;
		$('button').attr('disabled', true);
		$.post(url, {block: block, blockName: blockName, blockContent: blockContent}, function (data) {
			$('button').attr('disabled', false);
			if (data['errors']) {
				$('#errorBlock').html(data['errors']['block']);
				$('#errorBlockName').html(data['errors']['blockName']);
				$('#errorBlockContent').html(data['errors']['blockContent']);
				return;
			}
			$('#block_zone').empty();
			alert(data);

		});
	});


});
