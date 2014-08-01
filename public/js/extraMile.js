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

});
