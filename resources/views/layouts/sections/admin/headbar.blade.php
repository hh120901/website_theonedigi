<div class="head-bar">
	<div class="d-flex align-items-center justify-content-end pe-4 h-100">
		<button class="btn p-0 me-4 position-relative">
			<img class="pt-1" src="{{ asset('assets/images/icon-notifi.svg') }}" alt="">
			<span class="position-absolute start-100 translate-middle badge rounded-pill bg-red-400 badge-notifi">
				9
				<span class="visually-hidden">unread messages</span>
			  </span>
		</button>
		<div class="dropdown">
			<a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
				data-bs-toggle="dropdown" aria-expanded="false">
				<div class="ratio ratio-1x1 me-2" style="width: 36px; height: 36px">
					<img src="{{ asset('storage/'.auth()->user()->avatar) }}" alt="avt" class="rounded-circle me-2">
				</div>
				<div class="d-flex flex-column">
					<strong>{{ auth()->user()->firstname}}</strong>
					<p class="small mb-0">{{ auth()->user()->getRole->name ?? 'Root' }}</p>
				</div>
			</a>
			<ul class="dropdown-menu text-small shadow">
				<li><a class="dropdown-item" href="{{ url('/admin/users/edit/'.auth()->user()->id) }}">Profile</a></li>
				<li><a class="dropdown-item" href="{{ route('syslog.logout') }}">Logout</a></li>
			</ul>
		</div>
	</div>
</div>