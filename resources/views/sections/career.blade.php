
<div class="container h-100 position-relative">
	<div class="d-sm-flex pt-5r flex-wrap flex-lg-nowrap"> 
		<div class="pt-lg-5r">
			<span class="my-3 block-span-red-135"></span>
		</div>
		<div>
			<h2 class="fw-bold ms-0 ms-sm-2 text-decoration-underline text-secondary title-section">CAREER</h2>
		</div>
		<div class="me-135px ms-5">
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolor dignissimos ratione blanditiis nisi, voluptas tempore eveniet in facilis, nulla, esse omnis accusantium est a cum iste reprehenderit asperiores ipsum!laborum Lorem
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolor dignissimos ratione blanditiis nisi, voluptas tempore eveniet in facili
			</p>
		</div>
	</div>
	<div class="mb-3 ms-135px me-135px mb-4">
		<div class="pt-3 d-flex justify-content-between gap-3 flex-wrap flex-lg-nowrap">
			@if (!empty($careerChild))
				@foreach ($careerChild as $i => $c_child)
				<button class="btn btn-outline-red-primary btn-job {{ $i == 0 ? 'active' : '' }}" data-control-jobs="{{ $c_child->alias }}">
						{{ $c_child->name }}
					</button>
				@endforeach
			@endif
		</div>
	</div>
	<div class="list-of-job ms-135px me-135px mt-5">
		@if (!empty($careerChild))
			@foreach ($careerChild as $i => $c_child)
				<div class="job-card-container {{ $i == 0 ? '' : 'd-none' }}" data-job-target="{{ $c_child->alias }}">
					@php
						$c_posts = $c_child->activePosts()->orderBy('created_at')->get();
					@endphp
					@foreach ($c_posts as $career_key => $c_post)
						<div class="job-card mb-3">
							<div class="d-flex flex-wrap justify-content-between gap-3 my-3 my-lg-0">
								<h4 class="job-title mb-0">{{ $c_post->name }}</h4>
								<div>
									<a href="{{ url('/career/'.$c_child->alias.'/'.$c_post->id)}}" class="btn btn-see-detail-red rounded-4 btn-outline-red-primary">SEE DETAILS <i class="fal fa-arrow-up ms-3 fs-6 fw-medium" style="transform: rotate(45deg);"></i></a>
								</div>
							</div>
							<div class="d-flex flex-wrap gap-2 gap-sm-4">
								<button class="btn btn-job-description rounded-4">
									<img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
									<span  class="mx-3">{{ $c_post->working_form }}</span>
								</button>
								<button class="btn btn-job-description rounded-4">
									<img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
									<span  class="mx-3">{{ $c_post->working_type }}</span>
								</button>
							</div>
							<div class="job-description">
								<p class="mt-3 small fw-medium">{{ $c_post->title }}</p>
							</div>
						</div>
					@endforeach
				</div>
			@endforeach
		@endif
	</div>
	<div class="d-none d-md-flex justify-content-between">
		<a role="button" class="slide-prev-btn position-absolute bottom-0 start-0 d-none d-md-flex">
			<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
		</a>
		<a role="button" class="slide-next-btn position-absolute bottom-0 end-0 d-none d-md-flex" style="transform: rotate(180deg)">
			<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
		</a>
	</div>
</div>
<script>
	$(document).ready(function () {
		let jobContainer = $('.job-card-container');
		$('.btn-job').on('click', function(){
			$('.btn-job.active').removeClass('active');
			$(this).addClass('active');
			let dataJobs = $(this).data('control-jobs');
			jobContainer.each(function(){
				if ($(this).data('job-target') == dataJobs) {
					$(this).removeClass('d-none');
				}
				else {
					$(this).addClass('d-none');
				}
			})
		})
		window.addEventListener('resize', function () {
				let documentHeight = $(document).height();
				let listJob = $('.list-of-job');
				listJob.height(documentHeight*0.45)
				if (listJob.height() > 560){
					listJob.height(560);
				}
			});
	});
</script>
