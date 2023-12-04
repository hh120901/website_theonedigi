
<div class="container">
	<div class="d-flex pt-5r pb-2"> 
		<div class="pt-5r">
			<span class="mt-3 block-span-red-135"></span>
		</div>
		<div>
			<h2 class="fs-3r fw-bold text-decoration-underline text-secondary">OUR TEAMS</h2>
		</div>
	</div>
	<div class="team-cards row mx-4 mt-4 px-3 position-relative justify-content-center">
		@if (!empty($team_posts))
			@foreach ($team_posts as $k_t => $t_post)
				@if ($k_t < 4)
					<div class="person-card col-lg-3 col-md-6 px-3">
						<div class="person-card-header">
							<img src="{{ asset('storage/'.$t_post->featured_image) }}" alt="image">
						</div>
						<div class="person-card-body py-4">
							<h4>{{ $t_post->title }}</h4>
							<h5>{{ $t_post->name }}</h5>
						</div>
						<div class="person-card-footer">
							<p>Cell Phone: {{ $t_post->cell_phone }}</p>
							<p>Email: {{ $t_post->email }}</p>
							<p>Office Phone: {{ $t_post->office_phone }}/p>
							<p>Fax: {{ $t_post->fax }}/p>
						</div>
					</div>
				@endif
			@endforeach
		@endif
	</div>
	<div class="d-none d-lg-flex justify-content-between">
		<a role="button" class="slide-prev-btn">
			<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
		</a>
		<a role="button" class="slide-next-btn" style="transform: rotate(180deg)">
			<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
		</a>
	</div>
</div>