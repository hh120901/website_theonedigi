@extends('layouts.details')

@section('content')
	{{-- Screen 2 --}}
	<div class="container position-relative">
		<div class="d-flex pt-5r">
			<div class="">
				<div class="d-flex justify-content-end">
					<a href="{{ url('/#about') }}">
						<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
					</a>
				</div>
				<span class="mt-5 block-span-red-135"></span>
			</div>
			<div class="content-section w-100 me-135px d-flex">
				<div class="w-50 d-flex pe-5 pb-5 justify-content-between flex-column">
					<h2 class="fs-3r ms-5 fw-bold text-decoration-underline text-secondary" style="line-height: 56px;">COMPANY <br> MISSION</h2>
					<div>
						<p class="fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						<p class="fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
					</div>
				</div>
				<div class="w-50">
					<div class="about-detail-image ratio ratio-1x1">
						<img src="{{ asset('assets/images/about-detail.jpg') }}" alt="image">
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
