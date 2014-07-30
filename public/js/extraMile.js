$(document).ready(function () {
	//Карусель для таблицы команд
	$('.carousel').carousel({
		interval: 0
	});

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
		var blocks = getElements();

		var team_list = $('#team_list');
		var i = 2;
		var height = blocks[0].outerHeight(true) + blocks[1].outerHeight(true) + 40;
		while ($(this).attr("href") != '#' + blocks[i].attr('id')) {
			height += blocks[i].outerHeight(true);
			if (i == 2) {
				height += team_list.outerHeight(true);
			}
			i++;
		}
		$('html, body').animate({scrollTop: height}, 'slow');
	});

	function getElements() {
		return {
			0: $('#title'),
			1: $('.title_links'),
			2: $('#fund_raising'),
			3: $('#race_stages'),
			4: $('#rules_register'),
			5: $('#map'),
			6: $('#history'),
			7: $('#partners')
		};
	}

	function scroll_active() {

		/* вычисляем значения прокрутки страницы по вертикали */

		var window_top = $(window).scrollTop();

		/* вычисляем положение якорей на странице от начала страницы  по вертикали*/

		var fund_raising = $('div[id="fund_raising"]').offset().top - 70;
		var race_stages = $('div[id="race_stages"]').offset().top - 70;
		var rules_register = $('div[id="rules_register"]').offset().top - 70;
		var map = $('div[id="map"]').offset().top - 70;
		var history = $('div[id="history"]').offset().top - 70;
		var partners = $('div[id="partners"]').offset().top - 70;


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

});
