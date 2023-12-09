@extends('layouts.details')

@section('content')
	<div class="container">
		<div class="d-flex pt-4r flex-wrap flex-lg-nowrap gap-lg-0 gap-3"> 
			<div class="pt-lg-5r">
				<span class="mt-3 block-span-red-135"></span>
			</div>
			<div class="d-flex justify-content-between w-100">
				<div>
					<h2 class="fs-3r fw-bold text-decoration-underline text-secondary">{{ $post->name }}</h2>
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
					{!! $post->description !!}
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
					{{--<div class="d-flex flex-wrap gap-3">
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
					</div>--}}
					{!! $post->requirement !!}
				</div>
			</div>
			<div class="col-lg-4 apply-form">
				<div class="apply-form-header">
					<h4 class="fw-bold mb-4">INFORMATION TO APPLY</h4>
				</div>
				<div class="apply-form-body">
					<form action="{{ url('/apply-job') }}" name="applyForm" id="career-apply-form" method="POST" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="job_id" name="job_id" value="{{ $post->id }}">
						<input type="hidden" name="job_name" name="job_name" value="{{ $post->name }}">
						<div class="apply-input-group mb-4">
							<label for="candidate_name">
								<h6 class="small fw-bold">Full Name <span class="text-danger">*</span></h6>
							</label>
							<input type="text" id="candidate_name" name="candidate_name" class="rounded-4 career-input required" placeholder="Optimus">
							<span class="text-danger fw-semibold error-input d-none small">* This field is required!</span>
						</div>
						<div class="apply-input-group mb-4">
							<label for="candidate_email">
								<h6 class="small fw-bold">Email <span class="text-danger">*</span></h6>
							</label>
							<input type="email" id="candidate_email" name="candidate_email" class="rounded-4 career-input required" placeholder="abc@gmail.com">
							<span class="text-danger fw-semibold error-input d-none small">* This field is required!</span>
						</div>
						<div class="apply-input-group mb-4">
							<label for="candidate_phone">
								<h6 class="small fw-bold">Phone Number <span class="text-danger">*</span></h6>
							</label>
							<input type="text" id="candidate_phone" name="candidate_phone" class="rounded-4 career-input required" placeholder="03 1234 4567">
							<span class="text-danger fw-semibold error-input d-none small">* This field is required!</span>
						</div>
						<div class="apply-input-group mb-4">
							<label for="input_file">
								<h6 class="small fw-bold">Your CV <span class="text-danger">*</span></h6>
							</label>
							<input type="file" id="input_file" name="input_file" accept=".pdf" class="d-none input-file required">
							<div class="drop-zone">
								<div class="d-flex flex-column justify-content-center align-items-center border rounded-3 py-4">
									<p class="mb-2"><i class="fal fa-file-upload fs-4"></i></p>
									<p class="fw-semibold mb-0 mx-3">Drag or click here to upload your resume (Maximum size: 2MB)</p>
								</div>
							</div>
							<p class="file-name my-3 fw-semibold text-red-primary"></p>
							<span class="text-danger fw-semibold error-upload-file small d-none">* Upload your resume please!</span>
						</div>
						<div class="form-check d-flex align">
							<div class="pt-1">
								<input class="form-check-input p-2 me-3" type="checkbox" value="confirm" name="confirm-information" id="confirm-information" required>
							</div>
							<label class="form-check-label fw-semibold small" for="confirm-information">
								I agree to ABC’s Terms and Conditions and the Privacy Policy *
							</label>
						</div>
						<span class="text-danger fw-semibold error-cb small d-none">* You must agree to submit!</span>
						<button type="button" class="btn btn-outline-red-primary w-100 fw-bold rounded-4 mt-4 py-2 mb-5 btn-apply">
							APPLY NOW
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			let careerInput = $('.career-input.required');

			careerInput.on('blur', function(){
				if ($(this).val() == '') {
					$(this).addClass('error');
					$(this).parent().find('.error-input').removeClass('d-none');
				}
			})

			careerInput.on('focus', function(){
				if ($(this).val() == '') {
					$(this).removeClass('error');
					$(this).parent().find('.error-input').addClass('d-none');
				}
			})
			$('.drop-zone').on('drop', function (e) {
				$(this).removeClass('error');
			});
			$('.input-file.required').on('change', function(){
				$('.drop-zone.error').removeClass('error');
				$('.error-upload-file').addClass('d-none');
			})
			$('#confirm-information').on('change', function(){
				let val = $(this).is(':checked');
				if (val) {
					$('.error-cb').addClass('d-none');
				}
				
			})
			function checkInputFile() {
				let flag = true;
				if ($('#input_file').val() == '') {
					let getInputFile = $('.input-file.required');
					getInputFile.each(function(){
						let targetInput = $(this);
						if (targetInput.val() == '') {
							flag = false;
							targetInput.parent().find('.drop-zone').addClass('error');
							$('.error-upload-file').removeClass('d-none');
						}
					});
				}

				return flag;
			}

			function checkInputText() {
				let flag = true;
				let getAllInput = $('.career-input.required');
				getAllInput.each(function(){
					let targetInput = $(this);
					if (targetInput.val() == '') {
						flag = false;
						targetInput.addClass('error');
						targetInput.parent().find('.error-input').removeClass('d-none');
					}
				});

				return flag;
			}
			function checkCheckBox() {
				let flag = true;
				if (!$('#confirm-information').is(':checked')) {
					flag = false;
					$('.error-cb').removeClass('d-none');
				}
				return flag
			}

			$('.btn-apply').on('click', function() {
				let flagCheck = false;
				let inputCheck = checkInputText();
				let fileCheck = checkInputFile();
				checkCheckBox();
				if (inputCheck && fileCheck) {
					var applyFrom = document.getElementById("career-apply-form");
					applyFrom.submit();
				}
			})
		});
	</script>
@endsection