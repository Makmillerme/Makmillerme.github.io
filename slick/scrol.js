$(document).on('ready', function () {
	$('.vertical-center-4').slick({
		dots: true,
		vertical: true,
		centerMode: true,
		slidesToShow: 4,
		slidesToScroll: 2,
	})
	$('.vertical-center-3').slick({
		dots: true,
		vertical: true,
		centerMode: true,
		slidesToShow: 3,
		slidesToScroll: 3,
	})
	$('.vertical-center-2').slick({
		dots: true,
		vertical: true,
		centerMode: true,
		slidesToShow: 2,
		slidesToScroll: 2,
	})
	$('.vertical-center').slick({
		dots: true,
		vertical: true,
		centerMode: true,
	})
	$('.vertical').slick({
		dots: true,
		vertical: true,
		slidesToShow: 3,
		slidesToScroll: 3,
	})
	$('.regular').slick({
		dots: true,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
				},
			},
		],
	})
	$('.center').slick({
		dots: true,
		infinite: true,
		centerMode: true,
		slidesToShow: 5,
		slidesToScroll: 3,
	})
	$('.variable').slick({
		dots: true,
		infinite: true,
		variableWidth: true,
	})
	$('.lazy').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					arrows: false,
				},
			},
		],
	})
})
