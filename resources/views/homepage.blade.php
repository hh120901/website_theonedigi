{{-- Screen 1 --}}
<div class="container h-100 px-0">
	<div class="position-relative h-100" id="test-home" style="background-image: url({{ asset('assets/images/bgbanner1.png') }}); background-position-y: bottom; background-repeat: no-repeat;">
		<div class="h-100" style="background-image: url({{ asset('assets/images/bgbanner01.png') }}); background-position-y: inherit; background-repeat: no-repeat; background-position-x: right;">
			<div class="d-flex flex-column justify-content-center h-100 px-3">
				<div class="d-flex flex-wrap">
					<div class="title w-lg-50">
						<div class="row">
							<div class="col-lg-10">
								<h2 class="title-banner">WELCOME TO OUR PLACE!</h2>
							</div>
						</div>
						<p class="fs-5 pe-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus quo beatae nobis, amet dolore magni dicta quod quia autem voluptatem pariatur.</p>
					</div>
					<div class="img-banner w-lg-50 d-flex justify-content-center overflow-hidden">
						<div class="rounded-box ratio ratio-1x1 d-flex align-items-end justify-content-center overflow-hidden">
							<img class="mt-5" src="{{ asset('assets/images/ava_kevin.png') }}" alt="avt">
						</div>
					</div>
				</div>
				<hr class="banner-divider">
				<div class="d-flex">
					<div class="w-50 pe-2 pe-sm-5">
						<p class="fs-5 text-secondary mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequuntur adipisci reiciendis sed facere necessitatib.</p>
					</div>
					<div class="w-50 ps-2 ps-sm-5">
						<p class="fs-5 text-secondary mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia totam culpa sint minima iste d</p>
					</div>
				</div>
				<div class="d-flex justify-content-center position-relative">
					<div class="social-icon d-flex gap-4 align-items-end">
						<a href="#"><img class="border border-secondary rounded-5" src="{{ asset('assets/images/FB.svg') }}" alt="FB-icon"></a>
						<a href="#"><img src="{{ asset('assets/images/Twitter.svg') }}" alt="TW-icon"></a>
						<a href="#"><img src="{{ asset('assets/images/Linkedin.svg') }}" alt="In-icon"></a>
					</div>	
					{{--<div class="btn-scroll">
						<button class="btn btn-red-primary position-absolute end-0 fs-4 fw-semibold text-decoration-underline h-100 btn-next-page slide-next-btn d-none d-lg-block">
							SCROLL <img src="https://isiro.id.vn/todc/public/assets/images/arrow-right.svg" alt="">
						</button>
					</div>--}}
				</div>
				<div class="z-3">
					<a role="button" class="slide-next-btn position-absolute bottom-0 end-0 d-none d-md-flex" style="transform: rotate(180deg)">
						<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
	
