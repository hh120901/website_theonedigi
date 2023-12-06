@extends('layouts.app')

@section('content')
	<div class="full-content">
		<div class="swiper home-swiper">
			<div class="swiper-wrapper responsive-content">
				<div class="swiper-slide" id="home">
					@include('homepage')
				</div>
				<div class="swiper-slide" id="about">
					@include('sections.about')
				</div>
				<div class="swiper-slide" id="products">
					@include('sections.products')
				</div>
				<div class="swiper-slide" id="teams">
					@include('sections.teams')
				</div>
				<div class="swiper-slide" id="blogs">
					@include('sections.blogs')
				</div>
				<div class="swiper-slide" id="career">
					@include('sections.career')
				</div>
				<div class="swiper-slide" id="contact">
					@include('sections.contact1')
				</div>
				<div class="swiper-slide">
					@include('sections.contact2')
				</div>
		
			</div>
		</div>
		<button class="slide-prev-btn d-none" id="hidden_prev"></button>
		<button class="slide-next-btn d-none" id="hidden_next"></button>
	</div>
	<script>
		$(document).ready(function () {
			var responsiveContent = $('.responsive-content');
			var swiper = null;
			function initHomeSwiper() {
				var windowWidth = window.innerWidth;
				var breakpoint = 768; 
				
				// check 
				if (windowWidth < breakpoint) {
					if (swiper !== null) {
						swiper.destroy();
						swiper = null;
					}
					responsiveContent.addClass('d-flex flex-column');
				} else {
					responsiveContent.removeClass('d-flex flex-column');
					if (swiper === null) {
						swiper = new Swiper(".home-swiper", {
							navigation: {
								nextEl: ".slide-next-btn",
								prevEl: ".slide-prev-btn",
							},
							allowTouchMove: false,
							speed: 600,
						});
					}
					let getNavBtn = $('.navigation-to-slide');
					getNavBtn.on('click', function(){
						let target = $(this).data('sl-target');
						let slideTarget = $("#"+target);
						let goToSlideIndex = slideTarget.index();
						swiper.slideTo(goToSlideIndex);
					})

					swiper.on('slideChange', function (){
						var currentSlideIndex = swiper.activeIndex;
						getNavBtn.each(function(){
							let thisBtn = $(this);
							let dataTarget = thisBtn.data('sl-target');
							let slideTarget = $("#"+dataTarget); 
							let targetIndex = slideTarget.index();
							if (targetIndex == currentSlideIndex) {
								thisBtn.addClass('active');
							} else {
								thisBtn.removeClass('active');
							}
						})
					})
					// Catch url
					var lastSegmentUrl = window.location.pathname.split('/').pop();
					if(lastSegmentUrl !== '') {
						var urlTargetSlide = $("#"+lastSegmentUrl); 
						if (urlTargetSlide.length > 0) {
							var urlTargetSlideIndex = urlTargetSlide.index();
							swiper.slideTo(urlTargetSlideIndex);
						};
					}
				}
			}

			initHomeSwiper();

			window.addEventListener('resize', function () {
				initHomeSwiper();
			});
			
		});

	</script>
@endsection