@php
	$settings = \App\Models\Setting::first();
@endphp
<div class="container-fluid text-white bg-red-primary">
	<div class="container header-container">
		<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-between py-2 align-items-center h-100">
			<div class="d-flex align-items-center">
				<a role="button" class="site-logo no-decor navigation-to-slide" data-sl-target="home"><img src="{{ asset('storage/'.$settings->logo) }}" width="40" height="40" alt="logo"></a>
				<a role="button" class="site-name no-decor navigation-to-slide" data-sl-target="home"><h2 class="fw-semibold text-white fs-6 ps-3 mb-0">THE ONE DIGI CORP</h2></a>
			</div>
			<div class="main-menu navbar navbar-expand-lg">
				<button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
						aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item"><a role="button" class="nav-link px-3 font-heading small navigation-to-slide d-none d-md-block small" data-sl-target="about">ABOUT</a></li>
						<li class="nav-item"><a role="button" class="nav-link px-3 font-heading small navigation-to-slide d-none d-md-block small" data-sl-target="products">PRODUCTS</a></li>
						<li class="nav-item"><a role="button" class="nav-link px-3 font-heading small navigation-to-slide d-none d-md-block small" data-sl-target="teams">TEAMS</a></li>
						<li class="nav-item"><a role="button" class="nav-link px-3 font-heading small navigation-to-slide d-none d-md-block small" data-sl-target="blogs">BLOGS</a></li>
						<li class="nav-item"><a role="button" class="nav-link px-3 font-heading small navigation-to-slide d-none d-md-block small" data-sl-target="career">CAREER</a></li>
						<li class="nav-item"><a role="button" class="nav-link px-3 font-heading small navigation-to-slide d-none d-md-block small" data-sl-target="contact">CONTACT</a></li>
						{{-- Mobile --}}
						<li class="nav-item"><a href="#about" class="nav-link px-3 font-heading small d-block d-md-none" data-sl-target="about">ABOUT</a></li>
						<li class="nav-item"><a href="#products" class="nav-link px-3 font-heading small d-block d-md-none" data-sl-target="products">PRODUCTS</a></li>
						<li class="nav-item"><a href="#teams" class="nav-link px-3 font-heading small d-block d-md-none" data-sl-target="teams">TEAMS</a></li>
						<li class="nav-item"><a href="#blogs" class="nav-link px-3 font-heading small d-block d-md-none" data-sl-target="blogs">BLOGS</a></li>
						<li class="nav-item"><a href="#career" class="nav-link px-3 font-heading small d-block d-md-none" data-sl-target="career">CAREER</a></li>
						<li class="nav-item"><a href="#contact" class="nav-link px-3 font-heading small d-block d-md-none" data-sl-target="contact">CONTACT</a></li>
						<li class="nav-item d-lg-none"><input type="text" class="input-search font-heading" style="width: 150px" placeholder="Search"></li>
					</ul>
				</div>
			</div>
			<div class="nav-search">
				<div class="d-flex align-items-center d-xxl-none">
					<div>
						<a role="button" class="btn bg-red-primary me-3" data-bs-toggle="dropdown"><i class="fal fa-search text-white"></i></a>
						<ul class="dropdown-menu p-0 rounded-4">
							<li><input type="text" class="input-search font-heading small w-100" placeholder="Search"></li>
						</ul>
					</div>
					<div class="">
						<div role="button" class="ratio ratio-1x1 border rounded-1 border-white" style="width: 40px; height: 28px" data-bs-toggle="collapse" data-bs-target="#change_lang">
							<img class="rounded-1" src="{{ asset('assets/images/icons/icon-usa-flag.svg') }}" alt="">
						</div>
						<div class="collapse" id="change_lang">
							<a href="#" class="collapse-lang-item">
								<img src="{{ asset('assets/images/icons/icon-vn-flag.svg') }}" alt="">
							</a>
						</div>
					</div>
					
				</div>
				<div class="d-none d-xxl-flex">
					<input type="text" class="input-search font-heading small w-100" placeholder="Search">
					<div class="border-end border-white mx-3" style="height: 40px"></div>
					<div class="d-flex gap-3 align-items-center">
						<div class="ratio ratio-1x1 border rounded-1 border-white" style="width: 40px; height: 28px">
							<img class="rounded-1" src="{{ asset('assets/images/icons/icon-usa-flag.svg') }}" alt="">
						</div>
						<img src="{{ asset('assets/images/icons/icon-vn-flag.svg') }}" alt="">
					</div>
				</div>
			</div>
		</header>
	</div>
</div>
<script>
	$(document).ready(function () {
		$('.collapse-lang-item').on('click', function(){
			$(this).parent().removeClass('show');
		})
	});
</script>
