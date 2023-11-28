
	{{-- Screen 3 --}}
	<div class="container position-relative">
		<div class="d-flex pt-5r flex-wrap"> 
			<div class="pt-5r">
				<span class="mt-3 block-span-red-135"></span>
			</div>
			<div>
				<h2 class="fs-3r fw-bold text-decoration-underline text-secondary">OUR PRODUCTS</h2>
				<div class="d-flex flex-wrap">
					<div class="numbers d-flex flex-column align-items-center mt-3 mx-3 mx-xl-5" style="width: 75px">
						<div class="">
							<button class="btn btn-control-up">
								<i class="fal fa-caret-up fs-4"></i>
							</button>
						</div>
						<div class="my-4 d-flex d-lg-block">
							<div class="mb-4 pt-3 d-flex gap-3 flex-column rounded-pill justify-content-center align-items-center label-product-steps active" role="button" data-active-card="1-2">
								<span class="btn-select-products">1</span>
								<div class="line-between-steps" style="height: 1.5rem"></div>
								<span class="btn-select-products">2</span>
							</div>
							<div class="mb-4 pt-3 d-flex gap-3 flex-column rounded-pill justify-content-center align-items-center label-product-steps" role="button" data-active-card="3-4">
								<span class="btn-select-products">3</span>
								<div class="line-between-steps" style="height: 1.5rem"></div>
								<span class="btn-select-products">4</span>
							</div>
							<div class="mb-4 pt-3 d-flex gap-3 flex-column rounded-pill justify-content-center align-items-center label-product-steps" role="button" data-active-card="5-6">
								<span class="btn-select-products">5</span>
								<div class="line-between-steps" style="height: 1.5rem"></div>
								<span class="btn-select-products">6</span>
							</div>
							<div class="mb-4 pt-3 d-flex gap-3 flex-column rounded-pill justify-content-center align-items-center label-product-steps" role="button" data-active-card="7-8">
								<span class="btn-select-products">7</span>
								<div class="line-between-steps" style="height: 1.5rem"></div>
								<span class="btn-select-products">8</span>
							</div>
						</div>
						<div class="">
							<button class="btn btn-control-down">
								<i class="fal fa-caret-down pt-1 fs-4"></i>
							</button>
						</div>
					</div>
					<div class="d-flex gap-3 gap-xxl-5 flex-wrap mt-3 ms-xxl-5 ps-xxl-5">
						{{-- card 1 --}}
						<div class="our-products-card mx-4 card-index-1 active-1-2">
							<div class="ratio ratio-1x1" style="height: 320px">
								<img src="{{ asset('assets/images/image-product1.png') }}" alt="image">
							</div>
							<div class="d-flex justify-content-between">
								<h2 class="title-banner">01</h2>
								<div class="d-flex">
									<h6 class="mt-3 mx-3 text-secondary fw-bold">COMPANY FORMATION</h6>
									<div class="mb-4 d-flex align-items-end">
										<img src="{{ asset('assets/images/arrow-45deg.svg') }}" alt="icon" class="pb-1">
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-end">
								<a href="{{ url('/product-details') }}" title="View Details"><button class="btn btn-view-details">
									VIEW DETAILS
								</button></a>
							</div>
						</div>

						{{-- card 2 --}}
						<div class="our-products-card mx-4 align-self-end active-1-2">
							<div class="d-flex justify-content-between">
								<h2 class="title-banner">02</h2>
								<div class="d-flex">
									<h6 class="mt-3 mx-3 text-secondary fw-bold">GLOBAL IMMIGRATION & VISA SERVICES</h6>
									<div class="mb-4 d-flex align-items-end">
										<img src="{{ asset('assets/images/arrow-135deg.svg') }}" alt="icon" class="pb-1">
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-3">
								<a href="{{ url('/product-details') }}" title="View Details"><button class="btn btn-view-details">
									VIEW DETAILS
								</button></a>
							</div>
							<div class="ratio ratio-1x1" style="height: 320px">
								<img src="{{ asset('assets/images/image-product2.png') }}" alt="image">
							</div>
						</div>

						{{-- card 3 --}}
						<div class="our-products-card mx-4 active-3-4" style="display: none;">
							<div class="ratio ratio-1x1" style="height: 320px">
								<img src="{{ asset('assets/images/image-product1.png') }}" alt="image">
							</div>
							<div class="d-flex justify-content-between">
								<h2 class="title-banner">03</h2>
								<div class="d-flex">
									<h6 class="mt-3 mx-3 text-secondary fw-bold">COMPANY INFORMATION</h6>
									<div class="mb-4 d-flex align-items-end">
										<img src="{{ asset('assets/images/arrow-45deg.svg') }}" alt="icon" class="pb-1">
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-end">
								<a href="{{ url('/product-details') }}" title="View Details"><button class="btn btn-view-details">
									VIEW DETAILS
								</button></a>
							</div>
						</div>

						{{-- card 4 --}}
						<div class="our-products-card mx-4 align-self-end active-3-4" style="display: none;">
							<div class="d-flex justify-content-between">
								<h2 class="title-banner">04</h2>
								<div class="d-flex">
									<h6 class="mt-3 mx-3 text-secondary fw-bold">GLOBAL IMMIGRATION & VISA SERVICES</h6>
									<div class="mb-4 d-flex align-items-end">
										<img src="{{ asset('assets/images/arrow-135deg.svg') }}" alt="icon" class="pb-1">
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-3">
								<a href="{{ url('/product-details') }}" title="View Details"><button class="btn btn-view-details">
									VIEW DETAILS
								</button></a>
							</div>
							<div class="ratio ratio-1x1" style="height: 320px">
								<img src="{{ asset('assets/images/image-product2.png') }}" alt="image">
							</div>
						</div>

						{{-- card 5 --}}
						<div class="our-products-card mx-4 active-5-6" style="display: none;">
							<div class="ratio ratio-1x1" style="height: 320px">
								<img src="{{ asset('assets/images/image-product1.png') }}" alt="image">
							</div>
							<div class="d-flex justify-content-between">
								<h2 class="title-banner">05</h2>
								<div class="d-flex">
									<h6 class="mt-3 mx-3 text-secondary fw-bold">COMPANY INFORMATION</h6>
									<div class="mb-4 d-flex align-items-end">
										<img src="{{ asset('assets/images/arrow-45deg.svg') }}" alt="icon" class="pb-1">
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-end">
								<a href="{{ url('/product-details') }}" title="View Details"><button class="btn btn-view-details">
									VIEW DETAILS
								</button></a>
							</div>
						</div>

						{{-- card 6 --}}
						<div class="our-products-card mx-4 align-self-end active-5-6" style="display: none;">
							<div class="d-flex justify-content-between">
								<h2 class="title-banner">06</h2>
								<div class="d-flex">
									<h6 class="mt-3 mx-3 text-secondary fw-bold">GLOBAL IMMIGRATION & VISA SERVICES</h6>
									<div class="mb-4 d-flex align-items-end">
										<img src="{{ asset('assets/images/arrow-135deg.svg') }}" alt="icon" class="pb-1">
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-3">
								<a href="{{ url('/product-details') }}" title="View Details"><button class="btn btn-view-details">
									VIEW DETAILS
								</button></a>
							</div>
							<div class="ratio ratio-1x1" style="height: 320px">
								<img src="{{ asset('assets/images/image-product2.png') }}" alt="image">
							</div>
						</div>

						{{-- card 7 --}}
						<div class="our-products-card mx-4 active-7-8" style="display: none;">
							<div class="ratio ratio-1x1" style="height: 320px">
								<img src="{{ asset('assets/images/image-product1.png') }}" alt="image">
							</div>
							<div class="d-flex justify-content-between">
								<h2 class="title-banner">07</h2>
								<div class="d-flex">
									<h6 class="mt-3 mx-3 text-secondary fw-bold">COMPANY INFORMATION</h6>
									<div class="mb-4 d-flex align-items-end">
										<img src="{{ asset('assets/images/arrow-45deg.svg') }}" alt="icon" class="pb-1">
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-end">
								<a href="{{ url('/product-details') }}" title="details"><button class="btn btn-view-details">
									VIEW DETAILS
								</button></a>
							</div>
						</div>

						{{-- card 4 --}}
						<div class="our-products-card mx-4 align-self-end active-7-8" style="display: none;">
							<div class="d-flex justify-content-between">
								<h2 class="title-banner">08</h2>
								<div class="d-flex">
									<h6 class="mt-3 mx-3 text-secondary fw-bold">GLOBAL IMMIGRATION & VISA SERVICES</h6>
									<div class="mb-4 d-flex align-items-end">
										<img src="{{ asset('assets/images/arrow-135deg.svg') }}" alt="icon" class="pb-1">
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-3">
								<a href="{{ url('/product-details') }}" title="details"><button class="btn btn-view-details">
									VIEW DETAILS
								</button></a>
							</div>
							<div class="ratio ratio-1x1" style="height: 320px">
								<img src="{{ asset('assets/images/image-product2.png') }}" alt="image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="d-none d-lg-flex justify-content-between" style="margin-top: -2rem">
			<a role="button" class="slide-prev-btn">
				<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
			</a>
			<a role="button" class="slide-next-btn" style="transform: rotate(180deg)">
				<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
			</a>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			var currenActiveCards = '1-2';
			var currentLabelActive = 0;
			$('.label-product-steps').on('click', function (){ 
				$('.label-product-steps.active').removeClass('active');
				let strIndex = $(this).data('active-card');
				$(this).addClass('active');
				activeCard(currenActiveCards, strIndex);
				currenActiveCards = strIndex;
			})
			const activeCard = (currentIndex, activeIndex) => {
				$(`.active-${currentIndex}`).hide();
				$(`.active-${activeIndex}`).fadeIn();
			}
			
			$('.btn-control-down').on('click', function(){
				let nextCard = currenActiveCards.split("-");
				let productCards = $('.our-products-card');
				if (parseInt(nextCard[1], 10) == productCards.length) {
					nextCard[1] = '0';
				}
				let activeIndex = (parseInt(nextCard[1], 10) + 1) + '-' + (parseInt(nextCard[1], 10) + 2);
				let getLabel = $('.label-product-steps');
				$('.label-product-steps.active').removeClass('active');
				getLabel.each(function(){
					let currentLabel = $(this);
					if ($(this).data('active-card') == activeIndex) {
						$(this).addClass('active');
						return false;
					}
				})
				activeCard(currenActiveCards, activeIndex);
				currenActiveCards = activeIndex;
			});

			$('.btn-control-up').on('click', function(){
				let nextCard = currenActiveCards.split("-");
				let productCards = $('.our-products-card');
			
				if (parseInt(nextCard[0], 10) == 1) {
					nextCard[0] = productCards.length + 1;
				}
				
				let activeIndex = (parseInt(nextCard[0], 10) - 2) + '-' + (parseInt(nextCard[0], 10) -1);
				console.log(activeIndex);
				let getLabel = $('.label-product-steps');
				$('.label-product-steps.active').removeClass('active');
				getLabel.each(function(){
					let currentLabel = $(this);
					if ($(this).data('active-card') == activeIndex) {
						$(this).addClass('active');
						return false;
					}
				})
				activeCard(currenActiveCards, activeIndex);
				currenActiveCards = activeIndex;
			});
		});
	</script>

