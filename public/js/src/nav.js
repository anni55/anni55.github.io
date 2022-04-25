$(window).on('scroll', function () {
	if (window.scrollY > 0) {
		$('nav').addClass('shadow-sm');
	} else {
		$('nav').removeClass('shadow-sm');
	}
});