$(document).ready(function () {
	$('#btn_new_block').click(function () {
		$('.blocks_menu li').removeClass('active');
		var url_block = location.href + '/newBlock';
		getBlockForSection(url_block);
	});
	$('.get_block').click(function () {
		$('.blocks_menu li').removeClass('active');
		event.preventDefault();
		$(this).parent().addClass('active');
		var blockId = $(this).data('id');
		var url_block = location.href + '/change/' + blockId;
		getBlockForSection(url_block);
	});

	var block_zone = $('#block_zone');
	block_zone.on('click', '#btn_save', function () {
		var block = $('#inputBlock').val();
		var blockName = $('#inputBlockName').val();
		var blockContent = $('#inputBlockContent').val();

		var send_url = $('#form_block').attr('action');

		var formData = new FormData($('form')[0]);
		$('button').attr('disabled', true);
		$.ajax({
			url: send_url,  //Server script to process data
			type: 'POST',
			data: formData,
			//Ajax events
			/*beforeSend: beforeSendHandler,*/
			success: function (response) {
				$('button').attr('disabled', false);
				if (response['errors']) {

					$('#errorBlock').html(response['errors']['block']);
					$('#errorBlockName').html(response['errors']['blockName']);
					$('#errorBlockContent').html(response['errors']['blockContent']);

					if (response['errors']['textError']) {
						alert(response['errors']['textError']);
					}
					return
				}
				alert(response);
				$('#block_zone').empty();
				location.reload();
			},
			error: function () {
				alert('Ошибка, попробуйте ещё раз.');
				$('button').attr('disabled', false);
			},
			// Form data

			//Options to tell jQuery not to process data or worry about content-type.
			cache: false,
			contentType: false,
			processData: false
		});
	});

	function getBlockForSection(url_block) {
		$.get(url_block, '', function (data) {
			var $blockZone = $('#block_zone');
			$blockZone.html(data);
			/*CKEDITOR.replace('inputBlockContent');*/
			$blockZone.animate({opacity: "1"}, 'slow');
		});
	}

	block_zone.on('click', '.btn_save_content', function () {
		var image_id = $(this).data('id');
		var val = $('#edit_image_' + image_id + ' input[type=text]').val();
		$('body').css('cursor', 'progress');
		$('button').attr('disabled', true);
		var send_url = $('#form_block').attr('action') + '/image';
		$.post(send_url, {"image_id": image_id, "val": val},
			function (data) {
				$('body').css('cursor', 'default');
				$('button').attr('disabled', false);
				if (data['error']) {
					alert(data['error']);
					return
				}
				alert(data);
			}).error(function () {
				$('body').css('cursor', 'default');
				$('button').attr('disabled', false);
				alert('Ошибка соединения')
			});
	});
	block_zone.on('click', '.btn_del_image', function () {
		var send_url = $('#form_block').attr('action') + '/image';
		var image_id = $(this).data('id');
		$('body').css('cursor', 'progress');
		$('button').attr('disabled', true);
		$.ajax({
			type: "DELETE",
			url: send_url,
			data: {image_id: image_id},
			success: function (data) {
				alert(data);
				$('body').css('cursor', 'default');
				$('button').attr('disabled', false);
				$('#edit_image_' + image_id).fadeOut();
			},
			error: function () {
				alert('Ошибка, попробуйте ещё раз.');
				$('body').css('cursor', 'default');
				$('button').attr('disabled', false);
			}
		});
	});
});
