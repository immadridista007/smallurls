<!DOCTYPE html>
<html>
<head>	
	<title>SmallUrls...</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
</head>
<body>
	@include ('errors.messages')
	@include ('errors.errors')
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1>SmallUrls</h1> 
	    <p>Welcome to small Urls</p> 
	  </div>
	</div>
	@yield('content')
</body>
</html>


