@extends('layouts.admin')

@section('content')
	<div class="">
		<div>
			<div class="px-5 pt-5r">
				<h4 class="ms-5 fw-bold text-red-primary mb-3">ABOUT US</h4>
				<div class="border rounded-3 px-3 py-4 mx-5 bg-white">
					<div class="d-flex flex-wrap justify-content-between align-items-center">
						<span class="fs-5 fw-semibold">Resources List</span>
						<div class="input-search-group border rounded-3 d-flex justify-content-center bg-white">
							<input type="text" class="input-search-resources border-0 small rounded-3 ps-3"  placeholder="Search..." name="search_resouces" id="search_resouces">
							<button class="btn btn-search d-flex justify-content-center align-items-center px-2">
								<img src="{{ asset('assets/images/search-btn.svg') }}" alt="">
							</button>
						</div>
					</div>
					<div class="mt-4">
						@if (count($categories))
							<table class="table table-bordered rounded-3 table-management table-hover">
								<thead>
									<tr>
										<th scope="col">
											<div class="form-check d-flex justify-content-center">
												<input class="form-check-input btn-check-all" type="checkbox" value="" id="cb">
											</div>
										</th>
										<th class="text-center" scope="col">No</th>
										<th scope="col">Name</th>
										<th scope="col">Parent Category</th>
										<th scope="col">Status</th>
										<th scope="col">Description</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($categories as $i => $category)
										<tr>
											<th scope="col">
												<div class="form-check d-flex justify-content-center">
													<input class="form-check-input checkbox-manage-content" type="checkbox" value="" id="cb{{$i}}">
												</div>
											</th>
											<th class="text-center" scope="row">{{ $i+1 }}</th>
											<td>{{ $category->name }}</td>
											<td>
												@if (!empty($category->parent_id))
													@php
														$parentCat = \App\Models\PostCategory::find($category->parent_id);
													@endphp
												<span class="fw-medium">{{ !empty($parentCat) ? $parentCat->name : '' }}</span>
												@else 
												 	<span class="text-muted">None</span>
												@endif
											</td>
											<td class="post-status {{ $category->active == 1 ? 'active' : '' }}">{{ $category->active == 1 ? 'Activated' : 'Deactivated' }}</td>
											<td>{{ $category->description }}</td>
											<td class="">
												<div class="d-flex align-items-center">
													<a href="{{ url('/admin/categories/edit/'.$category->id) }}" class="me-3"><img src="{{ asset('assets/images/icon-eye.svg') }}" alt=""></a>
													<a href=""><img src="{{ asset('assets/images/icon-trash.svg') }}" alt=""></a>
												</div>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						@endif
						<div class="d-flex justify-content-between mt-4 flex-wrap">
							<div class="custom-pagination">
								{{ $categories->render() }}
							</div>
							<div class="d-flex gap-3">
								<a class="btn btn-outline-red-400 fw-semibold btn-remove-post me-3">
									Delete
								</a>
								<a href="{{ url('/admin/categories/edit') }}" class="btn btn-red-400 btn-add-post">
									Add new
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection