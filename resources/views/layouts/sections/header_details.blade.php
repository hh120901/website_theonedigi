<div class="container-fluid text-white bg-dark">
	<div class="container">
		<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-between py-3 header-container align-items-center px-3 px-lg-5">
			<div class="d-flex align-items-center">
				<a href="{{ url('/') }}" class="site-logo no-decor navigation-to-slide" data-sl-target="home"><img src="{{ asset('assets/images/logo_todc.png') }}" alt="logo img"></a>
				<a href="{{ url('/') }}" class="site-name no-decor navigation-to-slide" data-sl-target="home"><h2 class="fw-semibold text-white fs-6 ps-3 mb-0">THE ONE DIGI CORP</h2></a>
			</div>
			<div class="main-menu navbar navbar-expand-lg">
				<button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
						aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item"><a href="{{ url('/about') }}" class="nav-link px-2" data-sl-target="about">ABOUT</a></li>
						<li class="nav-item"><a href="{{ url('/products') }}" class="nav-link px-2" data-sl-target="products">PRODUCTS</a></li>
						<li class="nav-item"><a href="{{ url('/teams') }}" class="nav-link px-2" data-sl-target="teams">TEAMS</a></li>
						<li class="nav-item"><a href="{{ url('/blogs') }}" class="nav-link px-2" data-sl-target="blogs">BLOGS</a></li>
						<li class="nav-item"><a href="{{ url('/career') }}" class="nav-link px-2" data-sl-target="career">CAREER</a></li>
						<li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link px-2" data-sl-target="contact">CONTACT</a></li>
						<li class="nav-item d-md-none"><input type="text" class="input-search font-heading" style="width: 150px" placeholder="Search"></li>
					</ul>
				</div>
			</div>
			<div class="d-xl-flex justify-content-between align-items-center d-none">
				<input type="text" class="input-search font-heading" placeholder="Search">
				<div class="border-end border-white mx-3" style="height: 50px"></div>
				<div class="d-flex gap-3 align-items-center">
					<div class="ratio ratio-1x1 border rounded-1 border-white" style="width: 40px; height: 28px">
						<img class="rounded-1" src="{{ asset('assets/images/lang-eng.svg') }}" alt="">
					</div>
					<img src="{{ asset('assets/images/vn-flag.svg') }}" alt="">
				</div>
			</div>
		</header>
	</div>
</div>



