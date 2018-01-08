<!DOCTYPE html>

<html>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<head>
	<title>Roman Numeral Converter</title>
</head>

<body>

	<!-- Form to input integer for conversion -->
	<div class="container-fluid">

		<h1>Convert an Integer to its Roman Numeral counterpart</h1>

		<form method="POST" action="/convert">

			{{ csrf_field() }}

			<div class="form-group col-xs-2">
				<label for="integer">Integer</label>
				<input type="text" class="form-control" id="integer" name="integer" placeholder="Enter integer">
			</div>

			<div>
				<button type="submit" class="btn btn-primary">Convert</button>
			</div>

		</form>

		<!-- Show error message / exception handling -->
		<div class="alert alert-error">
			<ul>

				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach

			</ul>
		</div>

	</div>

	<!-- Most recently converted integers -->
	<div class="container-fluid">

		<a href="{{ url('/recent') }}">See most recently converted integers</a>
		
	</div>

	<!-- Top 10 converted integers -->
	<div class="container-fluid">

		<a href="{{ url('/top10') }}">See the top 10 converted integers</a>
		
	</div>

</body>

</html>