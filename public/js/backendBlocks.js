$(document).ready(function () {
	$('#btn_new_block').click(function () {
		var url = location.href + '/newBlock';
		getBlock(url);
	});
	$('.get_block').click(function () {
		$('.blocks_menu li').removeClass('active');
		event.preventDefault();
		$(this).parent().addClass('active');
		var blockId = $(this).data('id');
		var url = location.href + '/change/' + blockId;
		getBlock(url);
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
			location.reload();

		});
	});

	function getBlock(url) {
		$.get(url, '', function (data) {
			var $blockZone = $('#block_zone');
			$blockZone.html(data);
			/*CKEDITOR.replace('inputBlockContent');*/
			$blockZone.animate({opacity: "1"}, 'slow');
		});
	}
});
