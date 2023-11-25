@extends('layouts.admin')

@section('content')
	<div class="">
		<div>
			<div class="px-5 pt-5r">
				<h4 class="ms-5 fw-bold text-red-primary mb-3">USER ROLES</h4>
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
					<div class="mt-4 table-responsive">
						<table class="table table-bordered rounded-3 table-management">
							<thead>
								<tr>
									<th class="text-center" scope="col">No</th>
									<th scope="col">Name</th>
									<th scope="col">Created Date</th>
									<th scope="col">Quantity</th>
									<th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="text-center" scope="row">1</th>
									<td>Administrator</td>
									<td>09:34 - 11/07/2023</td>
									<td>3</td>
									<td class="post-status active">Activated</td>
								</tr>
								<tr>
									<th class="text-center" scope="row">2</th>
									<td>Content</td>
									<td>09:34 - 11/07/2023</td>
									<td>5</td>
									<td class="post-status active">Activated</td>
								</tr>
								<tr>
									<th class="text-center" scope="row">3</th>
									<td>Customer Support</td>
									<td>09:34 - 11/07/2023</td>
									<td>5</td>
									<td class="post-status active">Activated</td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection