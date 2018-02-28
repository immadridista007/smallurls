@extends ('templates.layouts')

@section ('content')
	<a href = "/" class="btn btn-danger">Go Back</a>
	<div class="well">
		<div>
			<a href="#" class="btn btn-info">{{ $mappers->key }}</a> : <a href="#" class="btn btn-info">{{ $mappers->value }}</a>
		</div>
	</div>
@endsection