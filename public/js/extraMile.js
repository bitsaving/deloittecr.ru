$(document).ready(function () {
	//Карусель для таблицы команд
	$('.carousel').carousel({
		interval: 0
	});

//	$('button.btn_support_team').attr('disabled', true);
//	$('#btn_title_donate').attr('disabled', true);

	// Карусель для фото
	$("#photo_carousel").owlCarousel({

		autoPlay: 5000, //Set AutoPlay to 3 seconds

		items: 4,
		itemsDesktop: [1199, 3],
		itemsDesktopSmall: [979, 3],
		navigation: true,
		pagination: false,
		rewindSpeed: 500

	});

	var $menu = $('#menu');

	$(window).scroll(function () {
		if ($(this).scrollTop() > 817 && !$menu.hasClass("menu_fixed")) {
			$menu.addClass("menu_fixed");
		} else if ($(this).scrollTop() <= 817 && $menu.hasClass("menu_fixed")) {
			$menu.removeClass("menu_fixed");
		}

	});

	$('#menu a').click(function () {
		event.preventDefault();
		var link = $(this).attr("href").replace('#', '');
		var height = $('div[id=' + link + ']').offset().top - 70;
		$('body').animate({scrollTop: height}, 'slow');
	});

	function scroll_active() {

		/* вычисляем значения прокрутки страницы по вертикали */

		var window_top = $(window).scrollTop();

		/* вычисляем положение якорей на странице от начала страницы  по вертикали*/

		var fund_raising = $('div[id="fund_raising"]').offset().top - 100;
		var race_stages = $('div[id="race_stages"]').offset().top - 100;
		var rules_register = $('div[id="rules_register"]').offset().top - 100;
		var map = $('div[id="map"]').offset().top - 100;
		var history = $('div[id="history"]').offset().top - 100;
		var partners = $('div[id="partners"]').offset().top - 100;


		/* Переключатель активного пункта меню в зависимости от положения на странице,
		 условии написаны от последнего якоря на странице, до первого */


		if (window_top > partners) {
			$("#menu a").removeClass("active");
			$('a[href="#partners"]').addClass("active");
		}
		else if (window_top > history) {
			$("#menu a").removeClass("active");
			$('a[href="#history"]').addClass("active");
		}
		else if (window_top > map) {
			$("#menu a").removeClass("active");
			$('a[href="#map"]').addClass("active");
		}
		else if (window_top > rules_register) {
			$("#menu a").removeClass("active");
			$('a[href="#rules_register"]').addClass("active");
		}
		else if (window_top > race_stages) {
			$("#menu a").removeClass("active");
			$('a[href="#race_stages"]').addClass("active");
		}
		else if (window_top > fund_raising) {
			$("#menu a").removeClass("active");
			$('a[href="#fund_raising"]').addClass("active");
		} else {
			$("#menu a").removeClass("active");
		}


	}

	jQuery(function () {

		jQuery(window).scroll(scroll_active);

	});

	//Загрузка фото
	$(':file').change(function () {
		var file = this.files[0];
		var name = file.name;
		var size = file.size;

		if (size > 1024 * 1000 * 2) {
			$('#inputFile').get(0).files[0] = null;
			alert('Слишком большой файл');
		}

		$(this).prev().prev('.file_name').html(name);
	});

	$('#send_reg_data').click(function () {
		$('.has-error').removeClass('has-error');
		var formData = new FormData($('#team_registration form')[0]);
		$('button').attr('disabled', true);
		$.ajax({
			url: '',  //Server script to process data
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
				$('.modal-content form').html(response['success'])
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

	$('.sorting').click(function () {
		if ($(this).hasClass('sort_active')) {
			return
		}

		var sort = $(this).data('action');

		$('.sort_active').removeClass('sort_active');
		$(this).addClass('sort_active');
		$.get('/extramile/sortTeam', {sort: sort}, function (data) {
			var carousel = $('.carousel-inner');
			carousel.animate({opacity: 0}, 'slow', function () {
				carousel.html(data)
			});
			carousel.animate({opacity: 1}, 'slow');
		});
	});

	$(document).on('click', '.team_name', function () {
		var team = $(this).data('team-id');

		/*$('#team_card').modal('show');*/
	});

	$(document).on('click', '.open_team_card', function () {
		var teamModal = $('#team_card').find('.card_info');
		teamModal.html('<div  class="load_content" style="padding-top: 250px"><img src="/img/AjaxLoader.gif" /></div>');
		var teamId = $(this).data('team-id');
		$.get('/extramile/getTeam', {teamId: teamId}, function (data) {
			teamModal.animate({opacity: 0}, 0, function () {
				teamModal.html(data)
			});
			teamModal.animate({opacity: 1}, 'slow');
		});
	});
	$(document).on('click', '.btn_support_team', function () {
		$('#team_card').modal('hide');
		var teamId = $(this).data('team-id');
		var teamName = $(this).data('team-name');
		var modal = $('#donate_form');

		modal.find('.common_donate').hide();
		modal.find('.team_donate').show();
		modal.find('.teamName').html(teamName);
		modal.find('input[name=teamId]').val(teamId);
		modal.find('input[name=CustomerNumber]').val('');
		modal.find('input[name=Sum]').val('');
		modal.modal('show');
	});

	$('#btn_title_donate').click(function () {
		var modal = $('#donate_form');
		var teamId = $(this).data('team-id');
		modal.find('input[name=teamId]').val(teamId);
		modal.find('input[name=CustomerNumber]').val('');
		modal.find('input[name=Sum]').val('');
		modal.find('.common_donate').show();
		modal.find('.team_donate').hide();
		modal.modal('show');
	});
});

