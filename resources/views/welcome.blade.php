@extends('templates.layouts')
@section ('content')
	<div class="container">
		<form action= " {{ '/' }} " method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" name="key" placeholder="Type Your Url Here" class="form-control" required>	
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-info">Submit</button>
			</div>
		</form>	
		<hr>
		<form action = " {{ '/show'}} " method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" name="value" placeholder="Type Your Url Here" class="form-control" required>	
			</div>
			<div class="form-group">
				<input type="submit" value="show" class="btn btn-primary"> 
			</div>			
		</form>

	</div>
@endsection