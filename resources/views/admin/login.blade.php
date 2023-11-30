<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="robots" content="index,follow"/>
	<meta name="author" content="{{ env('APP_NAME') }}">
	<title>The One Digi</title>
	@include('layouts/sections/styles')
</head>
<body >
	<section>
		<div class="container bg-white">
			<form action="{{ route('syslog.login') }}" method="POST">
				@csrf
				<div class="row bg-white mx-3 mx-md-0 align-items-center">
					<div class="col-lg-4 px-0 d-none d-sm-block" style="height: 1024px">
						<div style="background-image: url({{ asset('assets/images/bg-ad-light.png') }}); background-position-y: bottom; background-repeat: no-repeat; background-position-x: left; height: 100%;">
							<div style="background-image: url({{ asset('assets/images/bg-ad.png') }}); background-position-y: bottom; background-repeat: no-repeat; background-position-x: center; height: 100%;">
							</div>
						</div>
					</div>
					<div class="col-lg-8 px-0">
						<div class="h-100 py-5 pt-md-0 d-flex justify-content-center align-items-center">
							<div>
								<div class="d-flex mb-4 justify-content-center align-items-center">
									<div class="ratio ratio-1x1" style="width: 100px; height: 100px">
										<img src="{{ asset('assets/images/logo_site.png') }}" alt="logo">
									</div>
									<h2 class="fw-bold text-black fs-1 ms-5 mb-0">THE ONE <br> DIGI CORP</h2>
								</div>
								<div class="mb-4 text-center">
									<strong class="my-3 fs-2 fw-semibold">Login</strong>
								</div>
								<div class="form-login">
									<div class="apply-input-group mb-4">
										<label class="mb-2" for="email">
											<strong class="fw-semibold">Email <span class="text-danger">*</span></strong>
										</label>
										<input type="text" id="email" name="email" class="form-control rounded-3 custom-input" placeholder="enter your mail" autocomplete="off" required>
									</div>
									<div class="apply-input-group mb-4">
										<label class="mb-2" for="password">
											<strong class="fw-semibold">Password <span class="text-danger">*</span></strong>
										</label>
										<input type="password" id="password" name="password" class="form-control rounded-3 custom-input" autocomplete="off" placeholder="*******" required>
									</div>
									<div class="d-flex justify-content-center mb-4">
										<span class="text-decoration-underline text-center">Forgot your password ?</span>
									</div>
									<div>
										<button class="btn btn-red-400 w-100" type="submit" style="height: 50px">
											Log in
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
	@include('layouts/sections/scripts')
</body>
</html>