@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="mx-4 pt-5r">
			<h2 class="fs-3r fw-bold text-decoration-underline text-secondary">LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET</h2>
		</div>
		<div class="row mt-5">
			<div class="col-lg-5">
				<div class="featured-img ms-4">
					<img src="{{ asset('assets/images/blog-img.jpg') }}" width="100%" height="400px" alt="">
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
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, optio voluptates quidem quasi fuga, voluptatum unde quod nostrum deleniti impedit enim qui sint minus eum, nihil ullam dignissimos illum vero?
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, optio voluptates quidem quasi fuga, voluptatum unde quod nostrum deleniti impedit enim qui sint minus eum, nihil ullam dignissimos illum vero?
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, optio voluptates quidem quasi fuga, voluptatum unde quod nostrum deleniti impedit enim qui sint minus eum, nihil ullam dignissimos illum vero?
				</p>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, optio voluptates quidem quasi fuga, voluptatum unde quod nostrum deleniti impedit enim qui sint minus eum, nihil ullam dignissimos illum vero?
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, optio voluptates quidem quasi fuga, voluptatum unde quod nostrum deleniti impedit enim qui sint minus eum, nihil ullam dignissimos illum vero?
				</p>
				<div class="row pt-4">
					<div class="col-8">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, optio voluptates quidem quasi fuga, voluptatum unde quod nostrum deleniti impedit enim qui sint minus eum, nihil ullam dignissimos illum vero?
							Lorem ipsum dolor sit amet consectetur adipisicing elit
						</p>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Est illum esse soluta. Explicapariatur reiciendis, tempora incidunt consectetur numquam esse ex?
						</p>
					</div>
					<div class="col-4">
						<img src="{{ asset('assets/images/book.png') }}" width="100%" height="100%" alt="img">
					</div>
				</div>
				<p class="mt-3 mb-0">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				</p>
				<div class="d-flex justify-content-end">
					<a href="{{ url('/blogs') }}">
						<img width="80" src="{{ asset('assets/images/arrow-left.svg') }}" alt="Go back">
					</a>
				</div>
			</div>
		</div>
	</div>
@endsection