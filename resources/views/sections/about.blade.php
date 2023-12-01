
{{-- Screen 2 --}}

<div class="container position-relative">
	<div class="d-flex pt-5r flex-wrap">
		<div class="pt-5r">
			<span class="mt-3 block-span-red-135"></span>
		</div>
		<div class="me-5">
			<h2 class="fs-3r fw-bold text-decoration-underline text-secondary">ABOUT US</h2>
		</div>
		<div class="position-relative w-up-lg-100">
			<div class="background-border d-none d-xxl-block"></div>
			<div class="swiper mySwiper bg-light">
				<div class="swiper-wrapper">
					@if (!empty($about_posts) && count($about_posts))
						@foreach($about_posts as $index => $about_post)
							<div class="swiper-slide ratio ratio-1x1 sl{{ $index+1 }}">
								<img class="brightness" src="{{ asset('storage/'.$about_post->featured_image) }}" alt="about-image">
								<div class="px-5 text-white d-flex text-start align-items-end pb-5">
									<div>
										<h2 class="mb-4 fw-bold">{{ $about_post->title }}</h2>
										<div class="excerpt-post">
											{!! $about_post->description !!}
										</div>
										<div class="d-flex justify-content-end mt-4">
											<a href="{{ url('/about-details/'.$about_post->id)}}" class="btn btn-see-detail rounded-4">SEE DETAILS <i class="fal fa-arrow-up ms-3 fs-6 fw-medium" style="transform: rotate(45deg);"></i></a>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					@endif
				</div>
				{{-- custom navigation --}}
				<div class="d-flex justify-content-between">
					<div class="custom-prev-btn">
						<i class="fal fa-arrow-left fs-4"></i>
					</div>
					<div class="custom-next-btn">
						<i class="fal fa-arrow-right fs-4"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="d-lg-flex flex-column flex-grow-1 align-items-end me-5 pe-5 justify-content-center gap-5 d-none">
			@if (!empty($about_posts) && count($about_posts))
				@foreach($about_posts as $index => $about_post)
					<button class="btn about-btn-control-slide {{ $index == 0 ? 'active' : ''}}" data-gotosl='sl{{ $index+1 }}'>{{ $index+1 }}</button>
				@endforeach
			@endif
		</div>
	</div>
	<div class="d-none d-lg-flex justify-content-between" style="margin-top: -1rem">
		<a role="button" class="slide-prev-btn">
			<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
		</a>
		<a role="button" class="slide-next-btn" style="transform: rotate(180deg)">
			<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
		</a>
	</div>
</div>
<script>
		//Swiper
		$(document).ready(function () {
		// swiper js
		var aboutSwiper = new Swiper(".mySwiper", {
				slidesPerView: 1,
				loop: true,
				navigation: {
					nextEl: ".custom-next-btn",
					prevEl: ".custom-prev-btn"
			},
		});

		let getButtonControl = $('.about-btn-control-slide');
		getButtonControl.on('click', function(){
			let activeBtn = $('.about-btn-control-slide.active');
			let dataTarget = $(this).data('gotosl');
			let slTarget = $("."+dataTarget);
			let goToSl = slTarget.index();
			aboutSwiper.slideTo(goToSl);
			if (activeBtn.data('gotosl') != dataTarget) {
				activeBtn.removeClass('active');
				$(this).addClass('active');
			}
		})
		aboutSwiper.on('slideChange', function (){
				var currentSlideIndex = aboutSwiper.activeIndex;
				getButtonControl.each(function(){
					let thisBtn = $(this);
					let dataTarget = thisBtn.data('gotosl');
					let slideTarget = $("."+dataTarget); 
					let targetIndex = slideTarget.index();
					if (targetIndex == currentSlideIndex) {
						thisBtn.addClass('active');
					} else {
						thisBtn.removeClass('active');
					}
				})
			})
	});
</script>