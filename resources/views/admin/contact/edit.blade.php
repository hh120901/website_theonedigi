@extends('layouts.admin')

@section('content')
	<div class="">
		<div>
			<div class="px-lg-5 pt-5">
				<h4 class="ms-5 fw-bold text-red-primary mb-3">REQUEST DETAIL</h4>
				<form action="" enctype="multipart/form-data" name="adminForm" id="form-admin" method="POST" class="custom-form mb-5">
					@csrf
					<input type="hidden" id="task" name="task" value="{{ $request->input('task') }}">
					<div class="border rounded-3 px-3 py-4 mx-lg-5 bg-white">
						<div class="d-flex justify-content-between align-items-center">
							<span class="fs-5 fw-semibold">Contact Information</span>
						</div>
						<div class="mt-4 row">
							<div class="col-lg-6">
								<div class="mb-4">
									<label for="name">
										<h6 class="small fw-bold mb-3">Name </h6>
									</label>
									<input type="text" id="name" name="name" class="rounded-4 custom-input bg-white" value="{{ $contact->name }}" readonly>
								</div>
								<div class="mb-4">
									<label for="name">
										<h6 class="small fw-bold mb-3">Phone number </h6>
									</label>
									<input type="text" id="name" name="name" class="rounded-4 custom-input bg-white" value="{{ $contact->phone }}" readonly>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mb-4">
									<label for="email">
										<h6 class="small fw-bold mb-3">Email </h6>
									</label>
									<input type="email" id="email" name="email" class="rounded-4 custom-input bg-white" value="{{ $contact->sender }}" readonly>
								</div>
								<div class="mb-4">
									<label for="name">
										<h6 class="small fw-bold mb-3">Request date </h6>
									</label>
									<input type="text" id="name" name="name" class="rounded-4 custom-input bg-white" value="{{ $contact->created_at->format('d-m-Y H:i:s') }}" readonly>
								</div>
							</div>
							<div class="mb-4">
								<label for="title">
									<h6 class="small fw-bold mb-3">Message</h6>
								</label>
								<textarea name="description" id="description" class="custom-textarea bg-white" cols="30" rows="6" readonly>{{ $contact->message }}</textarea>
							</div>
						</div>
						<p class="mb-2 fw-semibold">
							If the request has been processed, please select the checkbox below!
						</p>
						<div class="form-check">
							<input class="form-check-input"type="checkbox" value="1" id="active" name="active" {{ $contact->active == 1 ? 'checked' : '' }}>
							<label for="active">Processed</label>
						</div>
					</div>
					<div class="d-flex gap-3 justify-content-end me-5 mt-3">
						<a href="{{ url()->previous() }}" class="btn btn-outline-red-400 fw-semibold btn-remove-post me-3">
							Cancle
						</a>
						<button type="submit" class="btn btn-red-400 btn-add-post btn-save">
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