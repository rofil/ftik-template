<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@section("titleHead")
			Template FTIK
		@stop
	</title>
	@section("head")
	<script type="text/javascript" src="{{ asset('rofil-ftik/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('rofil-ftik/bootstrap/js/bootstrap.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('rofil-ftik/bootstrap/css/bootstrap.min.css') }}">
	@show
</head>
<body>

	<div class="container">
		@section("header")
			<h1>Rofil Bootstrap Template</h1>
		@show
	</div>

	@section("navigation")
		@include("RofilBT::nav")
	@show

	<div class="container">
		@section("layout")
		
		@show
	</div>

	<div class="container">
		@section("footer")
		<div class="text-center" style="border:1px solid #ccc; border-radius:4px;padding:20px; margin-top:15px">
			Copyright &copy; {{ date("Y") }} by Rofilde Hasudungan. All Right Reserved.
		</div>
		@show	
		
	</div>
	
</body>
</html>