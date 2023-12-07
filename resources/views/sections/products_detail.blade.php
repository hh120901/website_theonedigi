@extends('layouts.details')

@section('content')
	<div class="container position-relative">
		<div class="sub-container pb-5">
			<div class="d-flex align-items-center align-items-sm-start">
				<h2 class="title-banner me-5 mb-3">01</h2>
				<h2 class="fs-3r fw-bold text-decoration-underline text-secondary mt-3">{{ $post->title }}</h2>
			</div>
			<div class="d-flex mt-5 flex-column flex-sm-row">
				<div class="w-100 w-lg-50">
					<div class="ratio ratio-1x1" style="height: 450px">
						<img src="{{ asset('storage/'.$post->featured_image) }}" alt="Feature Image">
					</div>
				</div>
				<div class="w-100 w-lg-50 ps-sm-5 pt-3 pt-sm-0 overflow-hidden">
					{!! $post->description !!}
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-between align-items-start">
			<span class="mt-3 block-span-red-135"></span>
			<a href="{{ url('/products') }}" class="me-5 pe-5">
				<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
			</a>
		</div>
	</div>
@endsection