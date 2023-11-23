<div class="container text-white bg-dark">
	<header class="d-flex align-items-center justify-content-center justify-content-md-between py-3 border-bottom header-container align-items-center px-5">
		<div class="d-flex align-items-center">
			<a role="button" class="site-logo no-decor navigation-to-slide" data-sl-target="home"><img src="{{ asset('assets/images/logo_todc.png') }}" alt="logo img"></a>
			<a role="button" class="site-name no-decor navigation-to-slide" data-sl-target="home"><h2 class="fw-semibold text-white fs-6 ps-3 mb-0">THE ONE DIGI CORP</h2></a>
		</div>
		<div class="main-menu navbar navbar-expand-lg">
			<button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"><a role="button" class="nav-link px-2 navigation-to-slide" data-sl-target="about">ABOUT</a></li>
					<li class="nav-item"><a role="button" class="nav-link px-2 navigation-to-slide" data-sl-target="products">PRODUCTS</a></li>
					<li class="nav-item"><a role="button" class="nav-link px-2 navigation-to-slide" data-sl-target="teams">TEAMS</a></li>
					<li class="nav-item"><a role="button" class="nav-link px-2 navigation-to-slide" data-sl-target="blogs">BLOGS</a></li>
					<li class="nav-item"><a role="button" class="nav-link px-2 navigation-to-slide" data-sl-target="career">CAREER</a></li>
					<li class="nav-item"><a role="button" class="nav-link px-2 navigation-to-slide" data-sl-target="contact">CONTACT</a></li>
				</ul>
			</div>
		</div>
		<div class="d-flex justify-content-between align-items-center">
			<input type="text" class="input-search me-4" placeholder="Search">
			<div class="dropdown account-dropdown">
				<a class="dropdown-toggle no-decor" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="{{ asset('assets/images/user-circle.svg') }}" alt="">
				</a>
				<ul class="dropdown-menu">
				  <li><a class="dropdown-item" href="#">Action</a></li>
				  <li><a class="dropdown-item" href="#">Another action</a></li>
				  <li><a class="dropdown-item" href="#">Something else here</a></li>
				</ul>
			</div>
			<div class="border-end border-white mx-3" style="height: 50px"></div>
			<div class="d-flex gap-3">
				<img src="{{ asset('assets/images/usa-flag.svg') }}" alt="">
				<img src="{{ asset('assets/images/vn-flag.svg') }}" alt="">
			</div>
		</div>
	</header>
</div>
