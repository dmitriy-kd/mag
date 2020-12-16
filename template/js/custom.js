$('.slider-gallery').slick({
	infinite: true,
	autoplay: true,
	slidesToShow: 3,
	slidesToScroll: 1,
	autoplaySpeed: 2000,
	responsive: [
	{
		breakpoint: 768,
		settings: {
			slidesToShow: 2
			
		}
	},
	{
		breakpoint: 480,
		settings: {
			slidesToShow: 1
		}
	}
	]
});