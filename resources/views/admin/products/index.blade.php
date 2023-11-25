@extends('layouts.admin')

@section('content')
	<div class="">
		<div>
			<div class="px-5 pt-5r">
				<h4 class="ms-5 fw-bold text-red-primary mb-3">OUR PRODUCTS</h4>
				<div class="border rounded-3 px-3 py-4 mx-5 bg-white">
					<div class="d-flex justify-content-between align-items-center">
						<span class="fs-5 fw-semibold">Resources List</span>
						<div class="input-search-group border rounded-3 d-flex justify-content-center bg-white">
							<input type="text" class="input-search-resources border-0 small rounded-3 ps-3"  placeholder="Search..." name="search_resouces" id="search_resouces">
							<button class="btn btn-search d-flex justify-content-center align-items-center px-2">
								<img src="{{ asset('assets/images/search-btn.svg') }}" alt="">
							</button>
						</div>
					</div>
					<div class="mt-4">
						<table class="table table-bordered rounded-3 table-management">
							<thead>
								<tr>
									<th scope="col">
										<div class="form-check d-flex justify-content-center">
											<input class="form-check-input btn-check-all" type="checkbox" value="">
										</div>
									</th>
									<th class="text-center" scope="col">No</th>
									<th scope="col">Title</th>
									<th scope="col">Created Date</th>
									<th scope="col">Status</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="col">
										<div class="form-check d-flex justify-content-center">
											<input class="form-check-input checkbox-manage-content" type="checkbox" value="">
										</div>
									</th>
									<th class="text-center" scope="row">1</th>
									<td>Lorem, ipsum dolortaque veritatis id at qui!</td>
									<td>09:34 - 11/07/2023</td>
									<td class="post-status active">Activated</td>
									<td class="">
										<div class="d-flex align-items-center">
											<a href="{{ url('/admin/products/edit/1') }}" class="me-3"><img src="{{ asset('assets/images/icon-eye.svg') }}" alt=""></a>
											<a href=""><img src="{{ asset('assets/images/icon-trash.svg') }}" alt=""></a>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="col">
										<div class="form-check d-flex justify-content-center">
											<input class="form-check-input checkbox-manage-content" type="checkbox" value="">
										</div>
									</th>
									<th class="text-center" scope="row">2</th>
									<td>Lorem, ipsum dolortaque veritatis id at qui!</td>
									<td>09:34 - 11/07/2023</td>
									<td class="post-status">Deactivated</td>
									<td class="">
										<div class="d-flex align-items-center">
											<a href="{{ url('/admin/products/edit/1') }}" class="me-3"><img src="{{ asset('assets/images/icon-eye.svg') }}" alt=""></a>
											<a href=""><img src="{{ asset('assets/images/icon-trash.svg') }}" alt=""></a>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="col">
										<div class="form-check d-flex justify-content-center">
											<input class="form-check-input checkbox-manage-content" type="checkbox" value="">
										</div>
									</th>
									<th class="text-center" scope="row">3</th>
									<td>Lorem, ipsum dolortaque veritatis id at qui!</td>
									<td>09:34 - 11/07/2023</td>
									<td class="post-status active">Activated</td>
									<td class="">
										<div class="d-flex align-items-center">
											<a href="{{ url('/admin/products/edit/1') }}" class="me-3"><img src="{{ asset('assets/images/icon-eye.svg') }}" alt=""></a>
											<a href=""><img src="{{ asset('assets/images/icon-trash.svg') }}" alt=""></a>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="col">
										<div class="form-check d-flex justify-content-center">
											<input class="form-check-input checkbox-manage-content" type="checkbox" value="">
										</div>
									</th>
									<th class="text-center" scope="row">4</th>
									<td>Lorem, ipsum dolortaque veritatis id at qui!</td>
									<td>09:34 - 11/07/2023</td>
									<td class="post-status active">Activated</td>
									<td class="">
										<div class="d-flex align-items-center">
											<a href="{{ url('/admin/products/edit/1') }}" class="me-3"><img src="{{ asset('assets/images/icon-eye.svg') }}" alt=""></a>
											<a href=""><img src="{{ asset('assets/images/icon-trash.svg') }}" alt=""></a>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="col">
										<div class="form-check d-flex justify-content-center">
											<input class="form-check-input checkbox-manage-content" type="checkbox" value="">
										</div>
									</th>
									<th class="text-center" scope="row">5</th>
									<td>Lorem, ipsum dolortaque veritatis id at qui!</td>
									<td>09:34 - 11/07/2023</td>
									<td class="post-status active">Activated</td>
									<td class="">
										<div class="d-flex align-items-center">
											<a href="{{ url('/admin/products/edit/1') }}" class="me-3"><img src="{{ asset('assets/images/icon-eye.svg') }}" alt=""></a>
											<a href=""><img src="{{ asset('assets/images/icon-trash.svg') }}" alt=""></a>
										</div>
									</td>
								</tr>
								
							</tbody>
						</table>
						<div class="d-flex justify-content-between mt-4 flex-wrap">
							<div>
								<p class="fw-normal">Page: 1 <span class="text-muted">| 2 | 3 | Next | Back</span></p>
							</div>
							<div class="d-flex gap-3">
								<a class="btn btn-outline-red-400 fw-semibold btn-remove-post me-3">
									Delete
								</a>
								<a href="{{ url('/admin/products/edit') }}" class="btn btn-red-400 btn-add-post">
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