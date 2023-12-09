<div class="container-fluid text-white bg-dark">
	<div class="container">
		<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-between py-3 header-container align-items-center px-3 px-lg-5">
			<div class="d-flex align-items-center">
				<a href="{{ url('/') }}" class="site-logo no-decor navigation-to-slide" data-sl-target="home"><img src="{{ asset('storage/'.$settings->logo) }}" width="40" height="40" alt="logo img"></a>
				<a href="{{ url('/') }}" class="site-name no-decor navigation-to-slide" data-sl-target="home"><h2 class="fw-semibold text-white fs-6 ps-3 mb-0">THE ONE DIGI CORP</h2></a>
			</div>
			<div class="main-menu navbar navbar-expand-lg">
				<button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
						aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item"><a href="{{ url('/about') }}" class="nav-link font-heading small px-2" data-sl-target="about">ABOUT</a></li>
						<li class="nav-item"><a href="{{ url('/products') }}" class="nav-link font-heading small px-2" data-sl-target="products">PRODUCTS</a></li>
						<li class="nav-item"><a href="{{ url('/teams') }}" class="nav-link font-heading small px-2" data-sl-target="teams">TEAMS</a></li>
						<li class="nav-item"><a href="{{ url('/blogs') }}" class="nav-link font-heading small px-2" data-sl-target="blogs">BLOGS</a></li>
						<li class="nav-item"><a href="{{ url('/career') }}" class="nav-link font-heading small px-2" data-sl-target="career">CAREER</a></li>
						<li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link font-heading small px-2" data-sl-target="contact">CONTACT</a></li>
						<li class="nav-item d-md-none"><input type="text" class="input-search font-heading small" style="width: 150px" placeholder="Search"></li>
					</ul>
				</div>
			</div>
			<div class="nav-search">
				<div class="d-flex align-items-center d-xxl-none">
					<div>
						<a role="button" class="btn btn-outline-dark me-3" data-bs-toggle="dropdown"><i class="fal fa-search text-white"></i></a>
						<ul class="dropdown-menu bg-dark p-0 rounded-4">
							<li><input type="text" class="input-search font-heading small w-100" placeholder="Search"></li>
						</ul>
					</div>
					<div class="">
						<div role="button" class="ratio ratio-1x1 border rounded-1 border-white" style="width: 40px; height: 28px" data-bs-toggle="collapse" data-bs-target="#change_lang">
							<img class="rounded-1" src="{{ asset('assets/images/lang-eng.svg') }}" alt="">
						</div>
						<div class="collapse" id="change_lang">
							<a href="#" class="collapse-lang-item">
								<img src="{{ asset('assets/images/vn-flag.svg') }}" alt="">
							</a>
						</div>
					</div>
					
				</div>
				<div class="d-none d-xxl-flex">
					<input type="text" class="input-search font-heading small w-100" placeholder="Search">
					<div class="border-end border-white mx-3" style="height: 40px"></div>
					<div class="d-flex gap-3 align-items-center">
						<div class="ratio ratio-1x1 border rounded-1 border-white" style="width: 40px; height: 28px">
							<img class="rounded-1" src="{{ asset('assets/images/lang-eng.svg') }}" alt="">
						</div>
						<img src="{{ asset('assets/images/vn-flag.svg') }}" alt="">
					</div>
				</div>
			</div>
		</header>
	</div>
</div>