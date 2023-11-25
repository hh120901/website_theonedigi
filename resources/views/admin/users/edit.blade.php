@extends('layouts.admin')

@section('content')
	<div class="">
		<div>
			<div class="px-lg-5 pt-5">
				<h4 class="ms-5 fw-bold text-red-primary mb-3">ADD NEW</h4>
				<form action="" class="custom-form">
					<div class="border rounded-3 px-3 py-4 mx-lg-5 bg-white">
						@csrf
						<div class="row mt-5 me-4">
							<div class="col-lg-3 d-flex justify-content-center px-0">
								<div class="box-avatar ratio ratio-1x1">
									<img src="{{ asset('assets/images/img-blank.jpg') }}" alt="avatar">
								</div>
							</div>
							<div class="col-lg-9">
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-4">
											<label for="title">
												<h6 class="small fw-bold mb-3">First name <span class="text-danger">*</span></h6>
											</label>
											<input type="email" id="title" name="title" class="rounded-4 custom-input bg-white" placeholder="" required>
										</div>
										<div class="mb-4">
											<label for="title">
												<h6 class="small fw-bold mb-3">Email <span class="text-danger">*</span></h6>
											</label>
											<input type="email" id="title" name="title" class="rounded-4 custom-input bg-white" placeholder="" required>
										</div>
										<div class="mb-4">
											<label for="title">
												<h6 class="small fw-bold mb-3">Date of birth <span class="text-danger">*</span></h6>
											</label>
											<input type="email" id="title" name="title" class="rounded-4 custom-input bg-white" placeholder="" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="mb-4">
											<label for="title">
												<h6 class="small fw-bold mb-3">Last name <span class="text-danger">*</span></h6>
											</label>
											<input type="email" id="title" name="title" class="rounded-4 custom-input bg-white" placeholder="" required>
										</div>
										<div class="mb-4">
											<label for="title">
												<h6 class="small fw-bold mb-3">Phone <span class="text-danger">*</span></h6>
											</label>
											<input type="email" id="title" name="title" class="rounded-4 custom-input bg-white" placeholder="" required>
										</div>
										<div class="mb-4">
											<label for="category">
												<h6 class="small fw-bold mb-3">Gender <span class="text-danger">*</span></h6>
											</label>
											<select class="form-select custom-select" id="inputGroupSelect01">
												<option value="1" selected>Male</option>
												<option value="2">Female</option>
											  </select>
										</div>
									</div>
									<div class="row">
										<h5 class="fw-bold lh-lg text-red-primary">Password</h5>
										<div class="col-lg-6 pe-lg-0">
											<div class="mb-4">
												<label for="title">
													<h6 class="small fw-bold mb-3">Type a password <span class="text-danger">*</span></h6>
												</label>
												<input type="text" id="title" name="title" class="rounded-4 custom-input bg-white" placeholder="" required>
											</div>
										</div>
										<div class="col-lg-6 d-flex align-items-end px-4">
											<div class="d-flex pb-4">
												<a href="" role="button">Auto-generate password</a>
												<div class="border-end border-2 mx-3 border-secondary"></div>
												<a href="" role="button">Choose my specific password.</a>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<h5 class="fw-bold lh-lg text-red-primary">Role Info</h5>
										<div class="mb-4">
											<label for="user_role">
												<h6 class="small fw-bold mb-3">User Role <span class="text-danger">*</span></h6>
											</label>
											<select class="form-select custom-select" id="user_role">
												<option selected>Select role...</option>
												<option value="3">Administrator</option>
												<option value="1">Content</option>
												<option value="2">Customer Support</option>
												</select>
										</div>
									</div>
									<div class="">
										<p class="mb-2 fw-semibold">
											If you want to active this user, please check the box!
										</p>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="active" name="active">
											<label for="active">Active</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="d-flex gap-3 justify-content-end me-5 mt-3">
						<a href="{{ url()->previous() }}" class="btn btn-outline-red-400 fw-semibold btn-remove-post me-3">
							Cancle
						</a>
						<button type="submit" class="btn btn-red-400 btn-add-post">
							Save
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$('.input-upload-image').on('click', function (){
				$('#featured_image').trigger('click');
			});
		});
	</script>
@endsection