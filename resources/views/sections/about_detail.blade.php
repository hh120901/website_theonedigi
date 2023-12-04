@extends('layouts.details')

@section('content')
	{{-- Screen 2 --}}
	<div class="container position-relative">
		<div class="d-flex pt-5r">
			<div class="">
				<div class="d-flex justify-content-end">
					<a href="{{ url('/about') }}">
						<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="arrow">
					</a>
				</div>
				<span class="mt-5 block-span-red-135"></span>
			</div>
			<div class="content-section w-100 me-135px d-flex">
				<div class="w-50 d-flex pe-5 pb-5 justify-content-between flex-column">
					<h2 class="fs-3r ms-5 fw-bold text-decoration-underline text-secondary" style="line-height: 56px;">{{ $post->title }}</h2>
					<div class="mt-5">
						{!! $post->description !!}
					</div>
				</div>
				<div class="w-50">
					<div class="about-detail-image ratio ratio-1x1">
						<img src="{{ asset('storage/'.$post->featured_image) }}" alt="image">
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
