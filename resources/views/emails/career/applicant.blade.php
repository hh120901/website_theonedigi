@extends('emails.template')

@section('content')
@php
	$position = \App\Models\Post::find($data->tpl_data->job_id);
	$settings = \App\Models\Setting::where('active', 1)->first();
@endphp
	<div class="mb-5">
		<h2 class="fs-2 text-red-primary mb-4">Acknowledgment of Your Job Application</h2>
		<p class="mb-3">Dear {{ $data->tpl_data->name }},</p>
		<p class="mb-3">
			I trust this email finds you well. I am writing to acknowledge the receipt of your recent job application for the position of [{{ $position->name }}] at {{ $settings->company_name }}. We appreciate the time and effort you invested in submitting your application.
		</p>
		<p class="mb-3">Application Details:</p>
		<ul style="margin-left: 3rem;">
			<li class="mb-3">Position Applied For: {{ $position->name }}</li>
			<li class="mb-3">Application Date: {{ $data->tpl_data->created_at->format('d-m-Y H:i') }}</li>
		</ul>
		<p class="mb-3">
			Our team is currently in the process of reviewing all applications received. If your qualifications match our requirements, we will contact you to proceed with the next steps in the hiring process. Please note that due to the high volume of applications, this process may take some time.
			We appreciate your interest in joining {{ $settings->company_name }} and want to assure you that your application is important to us. If you have any questions or need further information, please don't hesitate to reach out.
		</p>
		<p class="mb-3">
			Thank you for considering {{ $settings->company_name }} as your potential employer. We wish you the best of luck in the selection process.
		</p>
	</div>
@endsection