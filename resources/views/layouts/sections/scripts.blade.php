<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
@vite('resources/js/app.js')

<!-- Initialize Swiper -->
<script>
	// Tooltip
	//$(document).ready(function () {
	//	$('[data-toggle="tooltip"]').tooltip();
	//});

	// swiper js
	var swiper = new Swiper(".mySwiper", {
			slidesPerView: 1,
			loop: true,
			navigation: {
				breakpoints: {
					576: {
						slidesPerView: 1,
						spaceBetween: 5,
					},
					768: {
						slidesPerView: 2,
						spaceBetween: 5,
					},
					1024: {
						slidesPerView: 3,
						spaceBetween: 20
					}
				},
			nextEl: ".custom-prev-btn",
			prevEl: ".custom-next-btn"
		},
	});
</script>