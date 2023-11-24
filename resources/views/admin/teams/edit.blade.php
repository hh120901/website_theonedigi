@extends('layouts.admin')

@section('content')
	<div class="">
		<div>
			<div class="px-lg-5 pt-5">
				<h4 class="ms-5 fw-bold text-red-primary mb-3">ADD NEW</h4>
				<form action="" class="custom-form">
					<div class="border rounded-3 px-3 py-4 mx-lg-5 bg-white">
						@csrf
						<div class="d-flex justify-content-between align-items-center">
							<span class="fs-5 fw-semibold">Detail</span>
						</div>
						<div class="mt-4 row">
							<div class="col-lg-6">
								<div class="input-upload-image position-relative" role="button">
									<label class="fw-semibold mb-3" for="">Image <span class="text-danger">*</span></label>
									<div class="image-zone ratio ratio-1x1 rounded-3" style="height: 35rem">
										<img class="rounded-3" src="{{ asset('assets/images/personal-card2.jpg') }}" alt="">
									</div>
								</div>
								<input type="file" name="featured_image" id="featured_image" class="d-none">
							</div>

							<div class="col-lg-6">
								<div class="px-3">
									<div class="mb-4">
										<label for="name">
											<h6 class="small fw-bold mb-3">Name <span class="text-danger">*</span></h6>
										</label>
										<input type="email" id="name" name="name" class="rounded-4 custom-input bg-white" value="John Smith" placeholder="" required>
									</div>
									<div class="mb-4">
										<label for="title">
											<h6 class="small fw-bold mb-3">Title <span class="text-danger">*</span></h6>
										</label>
										<input type="email" id="title" name="title" class="rounded-4 custom-input bg-white" value="C.E.O" placeholder="" required>
									</div>
									<div class="mb-4">
										<label for="cellphone">
											<h6 class="small fw-bold mb-3">Cellphone <span class="text-danger">*</span></h6>
										</label>
										<input type="email" id="cellphone" name="cellphone" class="rounded-4 custom-input bg-white" value="0909090909" placeholder="" required>
									</div>
									<div class="mb-4">
										<label for="officephone">
											<h6 class="small fw-bold mb-3">Office Phone <span class="text-danger">*</span></h6>
										</label>
										<input type="email" id="officephone" name="officephone" class="rounded-4 custom-input bg-white" value="0909090909" placeholder="" required>
									</div>
									<div class="mb-4">
										<label for="fax">
											<h6 class="small fw-bold mb-3">Fax <span class="text-danger">*</span></h6>
										</label>
										<input type="email" id="fax" name="fax" class="rounded-4 custom-input bg-white" value="0909090909" placeholder="" required>
									</div>
								</div>
								
							</div>
							<div class="mt-3">
								<p class="mb-0">
									If you would like to publish this blog right now, please check box here!
								</p>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="publish" name="publish">
									<label for="publish">Publish</label>
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