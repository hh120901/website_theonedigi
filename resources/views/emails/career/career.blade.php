@extends('emails.template')

@section('content')
@php
	$position = \App\Models\Post::find($data->tpl_data->job_id);
@endphp
	<div class="mb-5">
		<h2 class="fs-2 text-red-primary mb-4">Notification of Job Application Received</h2>
		<p class="mb-3">Dear The One Digi Corp,</p>
		<p class="mb-3">
			I hope this email finds you well. I am writing to inform you that a new job application has been submitted through our company's website. Please find the details below:
		</p>
		<ul style="margin-left: 3rem;">
			<li class="mb-3">Name: {{ $data->tpl_data->name }}</li>
			<li class="mb-3">Email: {{ $data->tpl_data->sender }}</li>
			<li class="mb-3">Phone: {{ $data->tpl_data->phone }}</li>
			<li class="mb-3">Position: {{ $position->name }}</li>
			<li class="mb-3">Application Date: {{ $data->tpl_data->created_at->format('d-m-Y H:i') }}</li>
		</ul>
		<p class="mb-5">
			You can review the candidate's resume and application details by logging into the company's applicant tracking system or by accessing the attached files.
		</p>
	</div>
@endsection