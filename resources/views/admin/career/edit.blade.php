@extends('layouts.admin')

@section('content')
	<div class="">
		<div>
			<div class="px-5 pt-5">
				<h4 class="ms-5 fw-bold text-red-primary mb-3">Career Details</h4>
				<form action="" enctype="multipart/form-data" name="adminForm" id="form-admin" method="POST" class="custom-form mb-5">
					@csrf
					<input type="hidden" id="task" name="task" value="{{ $request->input('task') }}">
					<div class="border rounded-3 px-3 py-4 mx-5 bg-white">
						<div class="row">
							<div class="col-lg-6">
								<div class="px-3">
									<div class="mb-4">
										<label for="career_name">
											<h6 class="small fw-bold mb-3">Career name <span class="text-danger">*</span></h6>
										</label>
										<input type="text" id="career_name" name="career_name" class="rounded-4 custom-input required bg-white" placeholder="" value="{{ $post->name }}">
										<span class="input-error fw-semibold text-danger d-none">This field is required!</span>
									</div>
									<div class="mb-4">
										<label for="category">
											<h6 class="small fw-bold mb-3">Department <span class="text-danger">*</span></h6>
										</label>
										<select class="form-select custom-select" id="category" name="category">
											@if (!empty($careerChild))
												@foreach ($careerChild as $index => $child)
													<option value="{{ $child->id }}" {{ $post->category_id == $child->id ? 'selected' : '' }}>{{ $child->name }}</option>
												@endforeach
											@endif
										</select>
									</div>
									<div class="mb-4">
										<label for="title">
											<h6 class="small fw-bold mb-3">Title <span class="text-danger">*</span></h6>
										</label>
										<input type="text" id="title" name="title" class="rounded-4 custom-input required bg-white" placeholder="" value="{{ $post->title }}">
										<span class="input-error fw-semibold text-danger d-none">This field is required!</span>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="px-3">
									<div class="mb-4">
										<label for="working_form">
											<h6 class="small fw-bold mb-3">Working form <span class="text-danger">*</span></h6>
										</label>
										<select class="form-select custom-select" id="working_form" name="working_form">
											<option value="Onsite" selected>Onsite</option>
											<option value="Hybrid">Hybrid</option>
											<option value="Remote">Remote</option>
										  </select>
									</div>
									<div class="mb-4">
										<label for="working_type">
											<h6 class="small fw-bold mb-3">Type of work <span class="text-danger">*</span></h6>
										</label>
										<select class="form-select custom-select" id="working_type" name="working_type">
											<option value="Full-time" selected>Full-time</option>
											<option value="Part-time">Part-time</option>
										</select>
									</div>
								</div>
							</div>

							<div class="col-lg-12 mb-3">
								<div class="mx-3">
									<label for="title">
										<h6 class="small fw-bold mb-3">Job descriptions <span class="text-danger">*</span></h6>
									</label>
									<textarea name="description" id="description" class="custom-textarea bg-white tinymce" cols="30" rows="3">{{ $post->description }}</textarea>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="mb-4 mx-3">
									<label for="title">
										<h6 class="small fw-bold mb-3">Job requirements <span class="text-danger">*</span></h6>
									</label>
									<textarea name="requirement" id="requirement" class="custom-textarea bg-white tinymce" cols="30" rows="3">{{ $post->requirement }}</textarea>
								</div>
							</div>
							<div class="mx-3">
								<p class="mb-2 fw-semibold">
									If you would like to publish this blog right now, please check box here!
								</p>
								<div class="form-check">
									<input class="form-check-input"type="checkbox" value="1" id="active" name="active" {{ $post->active == 1 ? 'checked' : '' }}>
									<label for="active">Publish</label>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex gap-3 justify-content-end me-5 mt-3">
						<a href="{{ url()->previous() }}" class="btn btn-outline-red-400 fw-semibold btn-remove-post me-3">
							Cancle
						</a>
						<button type="button" class="btn btn-red-400 btn-add-post btn-save">
							Save
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection