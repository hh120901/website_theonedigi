
	{{-- Screen 3 --}}
	<div class="container h-100 position-relative">
		<div class="d-flex flex-column h-100 pt-5r">
			<div class="d-flex flex-wrap"> 
				<div class="pt-lg-5r">
					<span class="mt-3 block-span-red-135 mt-5r"></span>
				</div>
				<div>
					<h2 class="fw-bold ms-2 text-decoration-underline text-secondary title-section">OUR PRODUCTS</h2>
					<div class="d-flex flex-wrap justify-content-center">
						<div class="numbers column-product-number d-flex flex-lg-column justify-content-center align-items-center mt-3 mx-sm-3 mx-xxl-5">
							<div class="">
								<button class="btn btn-control-up">
									<i class="fal fa-caret-up fs-4"></i>
								</button>
							</div>
							<div class="my-4 mx-2 mx-sm-3 d-flex d-lg-block gap-3 flex-wrap">
								@if (!empty($product_posts))
									@php
										$counter = 0;
									@endphp
									@foreach ($product_posts as $k => $pd_post)
										@php
											$counter ++;
										@endphp
										@if ($counter == 2) 
											<div class="mb-lg-4 pt-lg-3 d-flex gap-3 flex-lg-column rounded-pill justify-content-center align-items-center label-product-steps {{ $k == '0' || $k == '1' ? 'active' : '' }}" role="button" data-active-card="{{ $k%2 == 0 ? $k+1 : $k }}-{{ $k % 2 == 0 ? $k+2 : $k+1 }}">
												<span class="btn-select-products">{{ $k }}</span>
												<div class="line-between-steps" style="height: 1.5rem"></div>
												<span class="btn-select-products">{{ $k+1 }}</span>
											</div>
											@php
												$counter = 0;
											@endphp
										@else
											@if( $k == count($product_posts) - 1 ) 
												<div class="mb-lg-4 pt-lg-3 d-flex gap-3 flex-column rounded-pill justify-content-center align-items-center label-product-steps {{ $k == '0' || $k == '1' ? 'active' : '' }}" role="button" data-active-card="{{ $k%2 == 0 ? $k+1 : $k }}-{{  $k % 2 == 0 ? $k+2 : $k+1 }}">
													<span class="btn-select-products">{{ $k+1 }}</span>
												</div>
											@endif
										@endif
									@endforeach
								@endif
							</div>
							<div class="">
								<button class="btn btn-control-down">
									<i class="fal fa-caret-down pt-1 fs-4"></i>
								</button>
							</div>
						</div>
						<div class="d-flex gap-3 gap-sm-5 flex-wrap mt-3 ms-xxl-5 ps-xxl-5">
							@if (!empty($product_posts))
								@foreach ($product_posts as $key => $product_post)
									@if ($key % 2 == 0)
										<div class="our-products-card card-index-1 active-{{ $key+1 }}-{{ $key+2 }}" style="{{ $key == 0 || $key == 1 ? '' : 'display: none;' }}">
											<div class="ratio ratio-1x1" style="height: 320px">
												<img src="{{ asset('storage/'.$product_post->featured_image) }}" alt="image">
											</div>
											<div class="d-flex justify-content-between">
												<div class="d-flex">
													<h2 class="card-title mb-0">{{ '0'.$key+1 }}</h2>
													<h6 class="mt-3 ms-3 ms-sm-4 text-secondary fw-bold">{{ $product_post->title }}</h6>
												</div>
												<div class="d-flex">
													<div class="mb-4 d-flex align-items-end">
														<img src="{{ asset('assets/images/arrow-45deg.svg') }}" alt="icon" class="pb-1 pt-3 pt-sm-0">
													</div>
												</div>
											</div>
											<div class="d-flex justify-content-end">
												<a href="{{ url('/product-details/'.$product_post->id .'?counter='.$key+1) }}" title="View Details"><button class="btn btn-view-details">
													VIEW DETAILS
												</button></a>
											</div>
										</div>
									@else 
										<div class="our-products-card align-self-end active-{{ $key }}-{{ $key+1 }}" style="{{ $key == 0 || $key == 1 ? '' : 'display: none;' }}">
											<div class="d-flex justify-content-between">
												<div class="d-flex">
													<h2 class="card-title mb-0">{{ '0'.$key+1 }}</h2>
													<h6 class="mt-3 ms-3 ms-sm-4 text-secondary fw-bold">{{ $product_post->title }}</h6>
												</div>
												<div class="d-flex">
													<div class="mb-4 d-flex align-items-end">
														<img src="{{ asset('assets/images/arrow-135deg.svg') }}" alt="icon" class="pb-1 pt-3 pt-sm-0">
													</div>
												</div>
											</div>
											<div class="d-flex justify-content-end mb-3">
												<a href="{{ url('/product-details/'.$product_post->id .'?counter='.$key+1) }}" title="View Details"><button class="btn btn-view-details">
													VIEW DETAILS
												</button></a>
											</div>
											<div class="ratio ratio-1x1" style="height: 320px">
												<img src="{{ asset('storage/'.$product_post->featured_image) }}" alt="image">
											</div>
										</div>
									@endif
								@endforeach
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="d-none d-md-flex justify-content-between ">
				<a role="button" class="slide-prev-btn position-absolute bottom-0 start-0 d-none d-md-flex z-3">
					<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
				</a>
				<a role="button" class="slide-next-btn position-absolute bottom-0 end-0 d-none d-md-flex z-3" style="transform: rotate(180deg)">
					<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
				</a>
			</div>
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
				if (parseInt(nextCard[1], 10) == productCards.length || parseInt(nextCard[1], 10) == productCards.length+1) {
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
					nextCard[0] = productCards.length % 2 == 0 ? (productCards.length + 1) : (productCards.length + 2);
				}

				let activeIndex = (parseInt(nextCard[0], 10) - 2) + '-' + (parseInt(nextCard[0], 10) -1);
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

