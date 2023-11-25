@extends('layouts.admin')

@section('content')
	<div class="">
		<div>
			<div class="px-5 pt-5">
				<h4 class="ms-5 fw-bold text-red-primary mb-3">Career Details</h4>
				<form action="" class="custom-form">
					<div class="border rounded-3 px-3 py-4 mx-5 bg-white">
						@csrf
						<div class="row">
							<div class="col-lg-6">
								<div class="px-3">
									<div class="mb-4">
										<label for="career_name">
											<h6 class="small fw-bold mb-3">Career name <span class="text-danger">*</span></h6>
										</label>
										<input type="email" id="career_name" name="career_name" class="rounded-4 custom-input bg-white" placeholder="" required>
									</div>
									<div class="mb-4">
										<label for="category">
											<h6 class="small fw-bold mb-3">Department <span class="text-danger">*</span></h6>
										</label>
										<select class="form-select custom-select" id="inputGroupSelect01">
											<option selected>Choose Department...</option>
											<option value="1">HR & ADMINISTRATOR</option>
											<option value="2">ACCOUNTING</option>
											<option value="3">INFORMATION TECHNOLOGY</option>
										  </select>
									</div>
									<div class="mb-4">
										<label for="title">
											<h6 class="small fw-bold mb-3">Title <span class="text-danger">*</span></h6>
										</label>
										<input type="email" id="title" name="title" class="rounded-4 custom-input bg-white" placeholder="" required>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="px-3">
									<div class="mb-4">
										<label for="category">
											<h6 class="small fw-bold mb-3">Working Site <span class="text-danger">*</span></h6>
										</label>
										<select class="form-select custom-select" id="inputGroupSelect01">
											<option value="1" selected>Onsite</option>
											<option value="2">Hybrid</option>
											<option value="3">Remote</option>
										  </select>
									</div>
									<div class="mb-4">
										<label for="category">
											<h6 class="small fw-bold mb-3">Type of work <span class="text-danger">*</span></h6>
										</label>
										<select class="form-select custom-select" id="inputGroupSelect01">
											<option value="1" selected>Full-time</option>
											<option value="2">Part-time</option>
										</select>
									</div>
								</div>
							</div>

							<div class="col-lg-12 mb-3">
								<div class="">
									<label for="title">
										<h6 class="small fw-bold mb-3">Job descriptions <span class="text-danger">*</span></h6>
									</label>
									<textarea name="description" id="description" class="custom-textarea bg-white" cols="30" rows="3" required>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolores? Quo dolor doloremque ipsa reprehenderit similique sed impedit? Quo delectus facilis porro rem corporis. Nulla repellat minima quas culpa!
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nihil amet esse consectetur minima, eaque nobis dolores impedit reprehenderit voluptas nesciunt recusandae facere hic fugit natus adipisci, vero nemo voluptatem?
									</textarea>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="mb-4">
									<label for="title">
										<h6 class="small fw-bold mb-3">Job requirements <span class="text-danger">*</span></h6>
									</label>
									<textarea name="description" id="description" class="custom-textarea bg-white" cols="30" rows="3" required>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolores? Quo dolor doloremque ipsa reprehenderit similique sed impedit? Quo delectus facilis porro rem corporis. Nulla repellat minima quas culpa!
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nihil amet esse consectetur minima, eaque nobis dolores impedit reprehenderit voluptas nesciunt recusandae facere hic fugit natus adipisci, vero nemo voluptatem?
									</textarea>
								</div>
							</div>
							<div>
								<p class="mb-2">
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