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
});
