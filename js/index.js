$('.sliderContainerHome, .sliderSection1, .sliderTestimonials, .sliderContainerModal').slick({
	slidesToShow: 1,
	slidesToScroll: 1
});
$('.modal').on('shown.bs.modal', function (e) {
	$('.sliderContainerModal').resize();
})
$('div#hamburger').click( function(e) {
	$(this).toggleClass('active');	
	$('.header-menu').toggleClass('active');

})