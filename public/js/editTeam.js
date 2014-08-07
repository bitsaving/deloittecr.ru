$(document).ready(function () {
	$('.btnEdit').click(function () {
		var data = $(this).data('team');
		for (var prop in data) {
			//noinspection JSUnfilteredForInLoop
			$('#team_edit input[name=' + prop + ']').val(data[prop]);
		}
		/** @namespace data.photo */
		$('.img_photo').attr('src', data.photo);
		$('#inputId').val(data.id);
		/** @namespace data.logo_img */
		$('.img_logo').attr('src', data.logo_img);
		$('.file_name').html('')
	});

	$(':file').change(function () {
		var file = this.files[0];
		var name = file.name;
		var size = file.size;

		if (size > 1024 * 1000 * 2) {
			$('#inputFile').get(0).files[0] = null;
			alert('Слишком большой файл');
		}

		$(this).parent().find('.file_name').html(name);
	});

	$("input[type=checkbox]").click(function () {
		var id = this.id;
		var val = this.checked;
		$('body').css('cursor', 'progress');
		$('button').attr('disabled', true);
		$.post('changeActive', {"id": id, "val": val},
			function (data) {
				$('body').css('cursor', 'default');
				$('button').attr('disabled', false);
				if (data['error']) {
					alert(data['error']);
					location.reload()
				}
			}).error(function () {
				$('body').css('cursor', 'default');
				$('button').attr('disabled', false);
				$('input[id=' + id + ']').prop('checked', !val);
			});
	});

	$('#send_edit_data').click(function () {
		$('.has-error').removeClass('has-error');
		var formData = new FormData($('#team_edit form')[0]);
		$('button').attr('disabled', true);
		$.ajax({
			url: 'editTeam',
			type: 'POST',
			data: formData,
			//Ajax events
			/*beforeSend: beforeSendHandler,*/
			success: function (response) {
				$('button').attr('disabled', false);
				if (response['errors']) {
					var obj = response['errors'];
					for (var prop in obj) {
						//noinspection JSUnfilteredForInLoop
						if (obj[prop]) {
							$('.modal-content input[name=' + prop + ']').parent().addClass('has-error')
						}
					}
					if (response['errors']['file']) {
						$('.modal-content input[name=file]').parent().css('border-color', '#a94442')
					} else {
						$('.modal-content input[name=file]').parent().css('border-color', '#cccccc')
					}
					if (response['errors']['logo']) {
						$('.modal-content input[name=logo]').parent().css('border-color', '#a94442')
					} else {
						$('.modal-content input[name=logo]').parent().css('border-color', '#cccccc')
					}
					if (response['errors']['textError']) {
						alert(response['errors']['textError']);
					}
					return
				}
				alert(response['success']);
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

	$('#send_reg_data').click(function () {
		$('.has-error').removeClass('has-error');
		var formData = new FormData($('#team_new form')[0]);
		$('button').attr('disabled', true);
		$.ajax({
			url: '/extramile',  //Server script to process data
			type: 'POST',
			data: formData,
			//Ajax events
			/*beforeSend: beforeSendHandler,*/
			success: function (response) {
				$('button').attr('disabled', false);
				if (response['errors']) {
					var obj = response['errors'];
					for (var prop in obj) {
						if (obj[prop]) {
							$('.modal-content input[name=' + prop + ']').parent().addClass('has-error')
						}
					}
					if (response['errors']['file']) {
						$('.modal-content input[name=file]').parent().css('border-color', '#a94442')
					} else {
						$('.modal-content input[name=file]').parent().css('border-color', '#cccccc')
					}
					if (response['errors']['logo']) {
						$('.modal-content input[name=logo]').parent().css('border-color', '#a94442')
					} else {
						$('.modal-content input[name=logo]').parent().css('border-color', '#cccccc')
					}
					if (response['errors']['textError']) {
						alert(response['errors']['textError']);
					}

					return
				}
				alert("Команда создана");
				location.reload();
			},
			error: function () {
				alert('Ошибка регистрации, попробуйте ещё раз.');
				$('button').attr('disabled', false);
			},
			// Form data

			//Options to tell jQuery not to process data or worry about content-type.
			cache: false,
			contentType: false,
			processData: false
		});
	});

});