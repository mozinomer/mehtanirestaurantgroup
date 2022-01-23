$('.sliderContainerHome, .sliderSection1, .sliderTestimonials, .sliderContainerModal').slick({
	slidesToShow: 1,
	slidesToScroll: 1
});
$('.modal').on('shown.bs.modal', function (e) {
	$('.sliderContainerModal').resize();
})