@extends('layouts.admin')

@section('content')
	<div class="">
		<div>
			<form action="" name="adminForm" id="form-admin" method="POST">
				@csrf
				<input type="hidden" name="checkedboxcounter" id="checkedboxcounter" value="0">
				<input type="hidden" id="task" name="task" value="{{ $request->input('task') }}">
				<div class="px-5 pt-5r">
					<h4 class="ms-5 fw-bold text-red-primary mb-3">Applicants</h4>
					<div class="border rounded-3 px-3 py-4 mx-5 bg-white">
						<div class="d-flex justify-content-between align-items-center">
							<span class="fs-5 fw-semibold">Applicant List</span>
							<div class="input-search-group border rounded-3 d-flex justify-content-center bg-white">
								<input type="text" class="input-search-resources border-0 small rounded-3 ps-3" value="{{ $request->input('search_text') }}"  placeholder="Search..." name="search_text" id="search_text">
								<button class="btn btn-search d-flex justify-content-center align-items-center px-2">
									<img src="{{ asset('assets/images/search-btn.svg') }}" alt="">
								</button>
							</div>
						</div>
						<div class="mt-4 table-responsive">
							@if (!empty($applicants))
								<table class="table table-bordered rounded-3 table-management">
									<thead>
										<tr>
											<th scope="col">
												<div class="form-check d-flex justify-content-center">
													<input class="form-check-input btn-check-all" type="checkbox" value="">
												</div>
											</th>
											<th class="text-center" scope="col">No</th>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Phone</th>
											<th scope="col">CV</th>
											<th scope="col">Status</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($applicants as $i => $applicant)
											<tr>
												<th scope="col">
													<div class="form-check d-flex justify-content-center">
														<input class="form-check-input checkbox-manage-content" type="checkbox" name="cid[]" value="{{ $applicant->id }}" id="cb{{ $applicant->id }}">
													</div>
												</th>
												<th class="text-center" scope="row">{{ $i+1 }}</th>
												<td>{{ $applicant->name }}</td>
												<td>{{ $applicant->sender }}</td>
												<td>{{ $applicant->phone }}</td>
												<td><a href="{{ asset('storage/'.$applicant->attachment) }}" target="_blank">View</a></td>
												<td class="post-status {{ $applicant->active == 1 ? 'active' : '' }}">{{ $applicant->active == 1 ? 'Read' : 'Unread' }}</td>
												<td class="">
													<div class="d-flex align-items-center">
														<a href="{{ url('/admin/applicants/download-cv/'.$applicant->id) }}" target="_blank" class="me-3 download-cv" data-download-id="{{ $applicant->id }}"><img src="{{ asset('assets/images/icon-download.svg') }}" alt=""></a>
														<a role="button" onclick="return confirmBox('Delete items', 'Are you sure you want to delete the selected items?', 'itemTask', ['{{ $applicant->id }}', 'delete'])"><img src="{{ asset('assets/images/icon-trash.svg') }}" alt=""></a>
													</div>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							@endif
							<div class="d-flex justify-content-between mt-4 flex-wrap">
								<div class="custom-pagination">
									{{ $applicants->render() }}
								</div>
								<div class="d-flex gap-3">
									<a href="{{ url('/admin/career') }}" class="btn btn-outline-red-400 fw-semibold btn-remove-post me-3">
										Back
									</a>
									{{--<a class="btn btn-outline-red-400 fw-semibold btn-remove-post me-3 btn-delete">
										Delete
									</a>--}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script>
		//$(document).ready(function () {
		//	$('.download-cv').on('click', function(){
		//		var task = 'download-cv';
		//		var _token = $('meta[name="csrf-token"]').attr("content");
		//		var ids = [$(this).data("download-id")];

		//		var p = {};
		//		p["task"] = task;
		//		p["_token"] = _token;
		//		p["cid"] = ids;
				
		//		$.ajax({
		//			type: "POST",
		//			url: `{{ url('/admin/applicants/download-cv') }}`,
		//			data: p,
		//			success: function(result) {
		//				console.log('successfully');
		//			}
		//		});
		//	})
		//});
	</script>
@endsection