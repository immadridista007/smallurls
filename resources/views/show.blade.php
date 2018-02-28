@extends ('templates.layouts')

@section ('content')
	<a href=" {{ '/' }} " class="btn btn-primary">Go Back</a>
	<div class="well">
		@foreach ($mappers as $mapper)
			{{ $mapper->key }} : "{{ $mapper->value }}"
		@endforeach
	</div>
@endsection