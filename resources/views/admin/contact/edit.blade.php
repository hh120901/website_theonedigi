@extends('layouts.admin')

@section('content')
	<div class="">
		<div>
			<div class="px-lg-5 pt-5">
				<h4 class="ms-5 fw-bold text-red-primary mb-3">REQUEST DETAIL</h4>
				<form action="" class="custom-form">
					<div class="border rounded-3 px-3 py-4 mx-lg-5 bg-white">
						@csrf
						<div class="d-flex justify-content-between align-items-center">
							<span class="fs-5 fw-semibold">Contact Information</span>
						</div>
						<div class="mt-4 row">
							<div class="col-lg-6">
								<div class="mb-4">
									<label for="name">
										<h6 class="small fw-bold mb-3">Name </h6>
									</label>
									<input type="text" id="name" name="name" class="rounded-4 custom-input bg-white" value="John Smith" readonly>
								</div>
								<div class="mb-4">
									<label for="name">
										<h6 class="small fw-bold mb-3">Phone number </h6>
									</label>
									<input type="text" id="name" name="name" class="rounded-4 custom-input bg-white" value="0213465789" readonly>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mb-4">
									<label for="email">
										<h6 class="small fw-bold mb-3">Email </h6>
									</label>
									<input type="email" id="email" name="email" class="rounded-4 custom-input bg-white" value="JohnSmith@abc.com" readonly>
								</div>
								<div class="mb-4">
									<label for="name">
										<h6 class="small fw-bold mb-3">Request date </h6>
									</label>
									<input type="text" id="name" name="name" class="rounded-4 custom-input bg-white" value="09:30 25/11/2023" readonly>
								</div>
							</div>
							<div class="mb-4">
								<label for="title">
									<h6 class="small fw-bold mb-3">Message</h6>
								</label>
								<textarea name="description" id="description" class="custom-textarea bg-white" cols="30" rows="6" readonly>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolores? Quo dolor doloremque ipsa reprehenderit similique sed impedit? Quo delectus facilis porro rem corporis. Nulla repellat minima quas culpa!
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nihil amet esse consectetur minima, eaque nobis dolores impedit reprehenderit voluptas nesciunt recusandae facere hic fugit natus adipisci, vero nemo voluptatem?
								</textarea>
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