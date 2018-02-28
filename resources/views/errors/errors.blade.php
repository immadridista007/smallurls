<div class="">
	@if (session ('bugs'))
		<div class="alert alert-danger">
			{{ session('bugs') }}
		</div>
	@endif
</div>
	