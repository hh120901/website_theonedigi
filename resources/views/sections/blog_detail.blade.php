@extends('layouts.details')

@section('content')
	<div class="container">
		<div class="mx-4 pt-5r">
			<h2 class="fs-3r fw-bold text-decoration-underline text-secondary">{{ $post->title }}</h2>
		</div>
		<div class="row mt-5">
			<div class="col-lg-5">
				<div class="featured-img ms-4">
					<img src="{{ asset('storage/'.$post->featured_image) }}" width="100%" height="400px" alt="">
				</div>
				<div class="my-4 pt-3 ">
					<span class="block-span-red-135"></span>
				</div>
				<div class="d-flex ms-4 gap-5">
					<div class="w-50">
						<p class="">
							LOREM IPSUM DOLOR SIT
						</p>
						<p class="fw-bold">
							LOREM IPSUM DOLOR SIT AMET
						</p>
					</div>
					<div class="w-50">
						<p class="">
							LOREM IPSUM DOLOR SIT
						</p>
						<p class="fw-bold">
							LOREM IPSUM DOLOR SIT AMET
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-7">
				{!! $post->description !!}
			</div>
		</div>
	</div>
@endsection