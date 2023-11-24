@extends('layouts.details')

@section('content')
	{{-- Screen 3 --}}
	<div class="container position-relative">
		<div class="sub-container pb-5">
			<div class="d-flex">
				<h2 class="title-banner me-5 mb-3">01</h2>
				<h2 class="fs-3r fw-bold text-decoration-underline text-secondary mt-3">COMPANY FORMATION</h2>
			</div>
			<div class="d-flex mt-5">
				<div class="w-50">
					<div class="ratio ratio-1x1" style="max-height: 450px">
						<img src="{{ asset('assets/images/image-product1.png') }}" alt="">
					</div>
				</div>
				<div class="w-50 ps-5">
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam veritatis placeat optio quisquam non voluptates laborum, odio consectetur tempora voluptatibus aut molestiae soluta quis explicabo, ullam, nisi eaque sunt. Corporis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus unde quo, magni eveniet culpa quibusdam, deserunt aut asperiores, repellat ullam blanditiis tempora officiis tempore! Sequi nihil a eligendi tempore nisi.</p>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam veritatis placeat optio quisquam non voluptates laborum, odio consectetur tempora voluptatibus aut molestiae soluta quis explicabo, ullam, nisi eaque sunt. Corporis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus unde quo, magni eveniet culpa quibusdam, deserunt aut asperiores, repellat ullam blanditiis tempora officiis tempore! Sequi nihil a eligendi tempore nisi.</p>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-between align-items-start">
			<span class="mt-3 block-span-red-135"></span>
			<a href="{{ url('/#products') }}" class="me-5 pe-5">
				<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
			</a>
		</div>
	</div>
@endsection