@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="d-flex pt-4r flex-wrap flex-lg-nowrap gap-lg-0 gap-3"> 
			<div class="pt-5r">
				<span class="mt-3 block-span-red-135"></span>
			</div>
			<div class="d-flex justify-content-between w-100">
				<div>
					<h2 class="fs-3r fw-bold text-decoration-underline text-secondary">SENIOR MARKETING OPERATOR</h2>
				</div>
				<div class="me-5">
					<a href="{{ url('/career') }}">
						<img width="80" src="{{ asset('assets/images/arrow-left.svg') }}" alt="Go back">
					</a>
				</div>
			</div>
		</div>
		<div class="row me-135px ms-135px gap-5">
			<div class="col-lg-7 job-description">
				<div class="mt-4 p-0">
					<h6 class="mb-4"><span class="border-bottom border-secondary fw-semibold">JOB DESCRIPTION:</span></h6>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="my-4 pt-3">
					<h6 class="mb-4"><span class="border-bottom border-secondary fw-semibold">RESPONSIBILITIES:</span></h6>
					<ul>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
						</li>
						<li>
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</li>
						<li>
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</li>
						<li>
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
						</li>
					</ul>
				</div>
				<div class="pt-3">
					<h6 class="mb-4"><span class="border-bottom border-secondary fw-semibold">REQUIREMENTS:</span></h6>
					<div class="d-flex flex-wrap gap-3">
						<button class="btn border rounded-4 py-2 px-3">
							Lorem Ipsum
						</button>
						<button class="btn border rounded-4 py-2 px-3">
							Lorem ipsum dolor sit 
						</button>
						<button class="btn border rounded-4 py-2 px-3">
							Eiusmod Tempor 
						</button>
						<button class="btn border rounded-4 py-2 px-3">
							Lorem Ipsum
						</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4 apply-form">
				<div class="apply-form-header">
					<h4 class="fw-bold mb-4">INFORMATION TO APPLY</h4>
				</div>
				<div class="apply-form-body">
					<form action="">
						<div class="apply-input-group mb-4">
							<label for="candidate_name">
								<h6 class="small fw-bold">Full Name <span class="text-danger">*</span></h6>
							</label>
							<input type="text" id="candidate_name" name="candidate_name" class="rounded-4 career-input" placeholder="Optimus" required>
						</div>
						<div class="apply-input-group mb-4">
							<label for="candidate_email">
								<h6 class="small fw-bold">Email <span class="text-danger">*</span></h6>
							</label>
							<input type="email" id="candidate_email" name="candidate_email" class="rounded-4 career-input" placeholder="abc@gmail.com" required>
						</div>
						<div class="apply-input-group mb-4">
							<label for="candidate_phone">
								<h6 class="small fw-bold">Phone Number <span class="text-danger">*</span></h6>
							</label>
							<input type="text" id="candidate_phone" name="candidate_phone" class="rounded-4 career-input" placeholder="03 1234 4567" required>
						</div>
						<div class="apply-input-group mb-4">
							<label for="candidate_resumn">
								<h6 class="small fw-bold">Your CV <span class="text-danger">*</span></h6>
							</label>
							<input type="file" id="candidate_resumn" name="candidate_resumn" class="" required>
						</div>
						<div class="form-check d-flex align">
							<div class="pt-1">
								<input class="form-check-input p-2 me-3" type="checkbox" value="" name="confirm-information" id="confirm-information" required>
							</div>
							<label class="form-check-label fw-semibold small" for="confirm-information">
								I agree to ABC’s Terms and Conditions and the Privacy Policy *
							</label>
						</div>
						<button class="btn btn-outline-red-primary w-100 fw-bold rounded-4 mt-4 py-2 mb-5">
							APPLY NOW
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection