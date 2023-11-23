@extends('layouts.app')

@section('content')
	<div class="d-lg-none">
			@include('homepage')
			@include('sections.about')
			@include('sections.teams')
			@include('sections.blogs')
			@include('sections.career')
			@include('sections.contact1')
			@include('sections.contact2')
	</div>
	<div class="full-content d-none d-lg-block">
		<div class="swiper home-swiper">
			<div class="swiper-wrapper">
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
			// Handle slide
			var swiper = new Swiper(".home-swiper", {
				navigation: {
					nextEl: ".slide-next-btn",
					prevEl: ".slide-prev-btn",
				},
				speed: 600,
			});
			// click on header
			let getNavBtn = $('.navigation-to-slide');
			getNavBtn.on('click', function(){
				let target = $(this).data('sl-target');
				let slideTarget = $("#"+target);
				let goToSlideIndex = slideTarget.index();
				swiper.slideTo(goToSlideIndex);
			})
			// fix me: change to active
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
				var urlTargetSlide = $("#" + lastSegmentUrl);
				if (urlTargetSlide.length > 0) {
					var urlTargetSlideIndex = urlTargetSlide.index();
					swiper.slideTo(urlTargetSlideIndex);
				};
			}
			
			var countScrollDown = 0;
			var countScrollUp = 0;

			$(window).on('wheel', function(event) {
				let maxScrollValue = document.documentElement.scrollHeight - window.innerHeight;
				// event.originalEvent.deltaY sẽ là giá trị chiều cuộn của sự kiện, dương khi cuộn lên và âm khi cuộn xuống
				if (event.originalEvent.deltaY > 0) {
					if (maxScrollValue != 0) {
						countScrollUp ++;
						if ($(window).scrollTop() >= maxScrollValue && countScrollUp >= 2){
							$('#hidden_next').trigger('click');
							countScrollUp = 0;
						}
					} else {
						$('#hidden_next').trigger('click');
					}
				} else if (event.originalEvent.deltaY < 0) {
					if (maxScrollValue != 0) {
						countScrollDown ++;
						if ($(window).scrollTop() <= 0 && countScrollDown >= 2){
							$('#hidden_prev').trigger('click');
							countScrollDown = 0;
						}
					} else {
						$('#hidden_prev').trigger('click');
					}
				}
			});

		});

	</script>
@endsection