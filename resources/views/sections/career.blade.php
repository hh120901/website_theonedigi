
<div class="container">
	<div class="d-flex pt-5r flex-wrap flex-lg-nowrap"> 
		<div class="pt-5r">
			<span class="mt-3 block-span-red-135"></span>
		</div>
		<div>
			<h2 class="fs-3r fw-bold text-decoration-underline text-secondary">CAREER</h2>
		</div>
		<div class="me-135px ms-5">
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolor dignissimos ratione blanditiis nisi, voluptas tempore eveniet in facilis, nulla, esse omnis accusantium est a cum iste reprehenderit asperiores ipsum!laborum Lorem
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolor dignissimos ratione blanditiis nisi, voluptas tempore eveniet in facili
			</p>
		</div>
	</div>
	<div class="mt-4 ms-135px me-135px mb-5">
		<div class="pt-3 d-flex justify-content-lg-between gap-3 flex-wrap">
			<button class="btn btn-outline-red-primary btn-job active">
				HR
			</button>
			<button class="btn btn-outline-red-primary btn-job">
				IT
			</button>
			<button class="btn btn-outline-red-primary btn-job">
				BUSINESS
			</button>
			<button class="btn btn-outline-red-primary btn-job">
				DESIGN
			</button>
			<button class="btn btn-outline-red-primary btn-job">
				OTHER
			</button>
		</div>
	</div>
	<div class="list-of-job ms-135px me-135px">
		{{-- Job 1 --}}
		<div class="job-card mb-3">
			<div class="d-flex flex-wrap justify-content-between">
				<h4 class="job-title mb-0">Senior Marketing Operator</h4>
				<div>
					<a href="{{ url('/career/details')}}" class="btn btn-see-detail-red rounded-4 btn-outline-red-primary">SEE DETAILS <i class="fal fa-arrow-up ms-3 fs-6 fw-medium" style="transform: rotate(45deg);"></i></a>
				</div>
			</div>
			<div class="d-flex flex-wrap gap-4">
				<button class="btn btn-job-description rounded-4">
					<img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
					<span  class="mx-3">100% onsite</span>
				</button>
				<button class="btn btn-job-description rounded-4">
					<img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
					<span  class="mx-3">Full time</span>
				</button>
				<button class="btn btn-job-description rounded-4">
					<img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
					<span  class="mx-3">2-year contract</span>
				</button>
			</div>
			<div class="job-description">
				<p class="mt-3 small fw-medium">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>
		</div>
		{{-- Job 1 --}}
		<div class="job-card mb-3">
			<div class="d-flex flex-wrap justify-content-between">
				<h4 class="job-title mb-0">Senior Marketing Operator</h4>
				<div>
					<a href="{{ url('/career/details')}}" class="btn btn-see-detail-red rounded-4 btn-outline-red-primary">SEE DETAILS <i class="fal fa-arrow-up ms-3 fs-6 fw-medium" style="transform: rotate(45deg);"></i></a>
				</div>
			</div>
			<div class="d-flex flex-wrap gap-4">
				<button class="btn btn-job-description rounded-4">
					<img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
					<span  class="mx-3">100% onsite</span>
				</button>
				<button class="btn btn-job-description rounded-4">
					<img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
					<span  class="mx-3">Full time</span>
				</button>
				<button class="btn btn-job-description rounded-4">
					<img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
					<span  class="mx-3">2-year contract</span>
				</button>
			</div>
			<div class="job-description">
				<p class="mt-3 small fw-medium">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>
		</div>
		{{-- Job 1 --}}
		<div class="job-card mb-3">
			<div class="d-flex flex-wrap justify-content-between">
				<h4 class="job-title mb-0">Senior Marketing Operator</h4>
				<div>
					<a href="{{ url('/career/details')}}" class="btn btn-see-detail-red rounded-4 btn-outline-red-primary">SEE DETAILS <i class="fal fa-arrow-up ms-3 fs-6 fw-medium" style="transform: rotate(45deg);"></i></a>
				</div>
			</div>
			<div class="d-flex flex-wrap gap-4">
				<button class="btn btn-job-description rounded-4">
					<img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
					<span  class="mx-3">100% onsite</span>
				</button>
				<button class="btn btn-job-description rounded-4">
					<img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
					<span  class="mx-3">Full time</span>
				</button>
				<button class="btn btn-job-description rounded-4">
					<img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
					<span  class="mx-3">2-year contract</span>
				</button>
			</div>
			<div class="job-description">
				<p class="mt-3 small fw-medium">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function () {

		$('.btn-job').on('click', function(){
			$('.btn-job.active').removeClass('active');
			$(this).addClass('active');
		})
	});
</script>
