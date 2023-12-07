
<div class="container">
	<div class="d-md-flex pt-5r flex-wrap flex-lg-nowrap"> 
		<div class="pt-lg-5r">
			<span class="mt-3 block-span-red-135"></span>
		</div>
		<div>
			<h2 class="fw-bold text-decoration-underline text-secondary title-section">BLOGS</h2>
		</div>
		<div class="me-135px ms-5">
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolor dignissimos ratione blanditiis nisi, voluptas tempore eveniet in facilis, nulla, esse omnis accusantium est a cum iste reprehenderit asperiores ipsum!laborum Lorem
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolor dignissimos ratione blanditiis nisi, voluptas tempore eveniet in facilis, nulla, esse omnis accusantium est a cum iste reprehenderit asperiores ipsum!laborum Lorem
			</p>
		</div>
	</div>
	<div class="mt-4 ms-135px me-135px mb-4">
		<div class="pt-3 d-flex justify-content-between gap-3 flex-wrap">
			<button class="btn btn-outline-red-primary btn-category active" data-control-posts="all">
				ALL BLOGS
			</button>
			@if (!empty($blogChild))
				@foreach ($blogChild as $i => $b_child)
					<button class="btn btn-outline-red-primary btn-category" data-control-posts="{{ $b_child->alias }}">
						{{ $b_child->name }}
					</button>
				@endforeach
			@endif
		</div>
	</div>
	<div class="pt-4 pe-3 px-lg-4">
		<div class="blog-swiper swiper ">
			<div class="swiper-wrapper" style="margin-left: 7rem">
				@if (!empty($blogChild))
					@foreach ($blogChild as $i => $b_child)
						@php
							$child_posts = $b_child->activePosts()->get();
						@endphp
						@if (!empty($child_posts))
							@foreach ($child_posts as $i_cp => $cp)
								<div class="swiper-slide show-post-in-cate position-relative" data-cate-target="{{ $b_child->alias }}">
									<a href="{{ url('/blogs/'. $b_child->alias .'/'.$cp->id) }}" class="text-decoration-none">
										<img class="img-featured" src="{{ asset('storage/'.$cp->featured_image) }}" alt="">
										<div class="post-title mt-3 d-flex justify-content-between align-items-center overflow-hidden">
											<div class="w-75 excerpt-blog-post">
												{!! $cp->description !!}
											</div>
											<div class="d-none d-lg-block">
												<img class="" src="{{ asset('assets/images/arrow-title-blog.svg') }}" alt="">
											</div>
										</div>
									</a>
								</div>
							@endforeach
						@endif
					@endforeach
				@endif
			</div>
			<div class="d-flex justify-content-between">
				<div class="blog-prev-btn">
					<svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56">
						<path d="M39.6665 40.8513L39.6665 15.1488C39.6665 13.6052 37.9921 12.6435 36.6588 13.4213L14.628 26.2725C13.305 27.0443 13.305 28.9559 14.628 29.7276L36.6588 42.5789C37.9921 43.3567 39.6665 42.3949 39.6665 40.8513Z" stroke="#741F19" stroke-width="2" stroke-linejoin="round"/>
					</svg>
				</div>
				<div class="blog-next-btn">
					<svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56">
						<path d="M16.3335 40.8513L16.3335 15.1488C16.3335 13.6052 18.0079 12.6435 19.3412 13.4213L41.372 26.2725C42.695 27.0443 42.695 28.9559 41.372 29.7276L19.3412 42.5789C18.0079 43.3567 16.3335 42.3949 16.3335 40.8513Z" stroke="#741F19" stroke-width="2" stroke-linejoin="round"/>
					</svg>
				</div>
			</div>
			{{--<div class="swiper-pagination"></div>--}}
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
		var swiper = new Swiper(".blog-swiper", {
			slidesPerView: 2,
			spaceBetween: 40,
			loop: false,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			navigation: {
				nextEl: ".blog-next-btn",
				prevEl: ".blog-prev-btn",
			},
			breakpoints: {
				// when window width is >= 320px
				320: {
				slidesPerView: 1,
				spaceBetween: 20
				},
				// when window width is >= 480px
				480: {
				slidesPerView: 1,
				spaceBetween: 20
				},
				// when window width is >= 640px
				800: {
				slidesPerView: 2,
				spaceBetween: 30
				},
			}
		});

		let allSilde = $('.show-post-in-cate');
		$('.btn-category').on('click', function(){
			$('.btn-category.active').removeClass('active');
			$(this).addClass('active');
			let showCate = $(this).data('control-posts');
			if (showCate == 'all') {
				allSilde.each(function(){
					$(this).removeClass('d-none');
					swiper.update();
				})
			} else {
				allSilde.each(function(){
					if ($(this).data('cate-target') != showCate){
						$(this).addClass('d-none');
						swiper.update();
					} else {
						$(this).removeClass('d-none');
						swiper.update();
					}
				})
			}
			
		})
	});
</script>
