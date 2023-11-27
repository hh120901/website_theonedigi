@extends('layouts.admin')

@section('content')
	<div class="">
		<div>
			<div class="px-5 pt-5">
				<h4 class="ms-5 fw-bold text-red-primary mb-3">ADD NEW</h4>
				<form action="" class="custom-form">
					<div class="border rounded-3 px-3 py-4 mx-5 bg-white">
						@csrf
						<div class="d-flex justify-content-between align-items-center">
							<span class="fs-5 fw-semibold">Detail</span>
						</div>
						<div class="mt-4 row">
							<div class="col-lg-6">
								<div class="input-upload-image position-relative" role="button">
									<label class="fw-semibold mb-3" for="">Image <span class="text-danger">*</span></label>
									<div class="drop-zone image-zone ratio ratio-1x1 rounded-3 bg-secondary bg-opacity-10" style="height: 310px">
										<div class="d-flex flex-column justify-content-center align-items-center">
											<p class="mb-2"><i class="fal fa-file-upload fs-3"></i></p>
											<p>Drop file or click here to upload image</p>
										</div>
										<img class="rounded-3 previewImage d-none" src="{{ asset('assets/images/about-detail.jpg') }}" alt="">
									</div>
								</div>
								<p class="file-name my-3 fw-semibold text-red-primary d-none"></p>
								<input type="file" name="featured_image" id="featured_image" accept="image/*" class="d-none input-file">
							</div>

							<div class="col-lg-6">
								<div class="px-3">
									<div class="mb-4">
										<label for="title">
											<h6 class="small fw-bold mb-3">Title <span class="text-danger">*</span></h6>
										</label>
										<input type="email" id="title" name="title" class="rounded-4 custom-input bg-white" placeholder="" required>
									</div>
								</div>
							</div>

							<div class="col-lg-12 mt-4">
								<div class="mb-4">
									<label for="title">
										<h6 class="small fw-bold mb-3">Description <span class="text-danger">*</span></h6>
									</label>
									<textarea name="description" id="description" class="custom-textarea bg-white" cols="30" rows="6" required>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, repellat dolores? Quo dolor doloremque ipsa reprehenderit similique sed impedit? Quo delectus facilis porro rem corporis. Nulla repellat minima quas culpa!
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
@endsection