@extends('layouts.app')

@section('content')
	<div class="custom-layout">
		<div class="container position-relative" style="background-image: url({{ asset('assets/images/bgbanner1.png') }}); background-position-y: bottom;">
			<div style="background-image: url({{ asset('assets/images/bgbanner01.png') }}); background-position-y: inherit; background-repeat: no-repeat; background-position-x: right;">
				<div class="sub-container">
					<div class="d-flex flex-wrap">
						<div class="title w-50">
							<h2 class="title-banner mb-5">WELCOME <br> TO OUR <br> PLACE!</h2>
							<p class="fs-5 pe-5 pt-3 fw-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus quo beatae nobis, amet dolore magni dicta quod quia autem voluptatem pariatur.</p>
						</div>
						<div class="img-banner w-50 d-flex justify-content-center">
							<div class="rounded-box d-flex align-items-end justify-content-center overflow-hidden">
								<img src="{{ asset('assets/images/ava_kevin.png') }}" alt="avt" width="413" height="413">
							</div>
						</div>
					</div>
					<hr class="my-5">
					<div class="d-flex">
						<div class="w-50 pe-5">
							<p class="fs-5 text-secondary fw-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequuntur adipisci reiciendis sed facere necessitatib.</p>
						</div>
						<div class="w-50 ps-5">
							<p class="fs-5 text-secondary fw-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia totam culpa sint minima iste d</p>
						</div>
					</div>
					<div class="d-flex justify-content-center position-relative h-5r">
						<div class="social-icon d-flex gap-4 align-items-end">
							<a href="#"><img src="{{ asset('assets/images/FB.svg') }}" alt="FB-icon"></a>
							<a href="#"><img src="{{ asset('assets/images/linkind.svg') }}" alt="In-icon"></a>
							<a href="#"><img src="{{ asset('assets/images/Twitter.svg') }}" alt="TW-icon"></a>
						</div>	
						<div class="btn-scroll">
							<button class="btn btn-red-primary position-absolute end-0 fs-4 fw-semibold text-decoration-underline h-100 btn-next-page">
								SCROLL <img src="{{ asset('assets/images/arrow-right.svg') }}" alt="">
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
