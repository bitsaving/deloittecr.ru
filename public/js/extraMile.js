$(document).ready(function () {
	//Карусель для таблицы команд
	$('.carousel').carousel({
		interval: 0
	});

	// Карусель для фото
	$(".carousel-demo2").sliderkit({
		shownavitems: 3,
		scroll: 1,
		mousewheel: true,
		circular: true,
		start: 1
	});
});
