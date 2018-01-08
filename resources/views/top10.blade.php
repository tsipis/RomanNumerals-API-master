<!DOCTYPE html>

<html>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<head>
	<title>Roman Numeral Converter</title>
</head>

<body>

	<!-- Show converted number -->
	<div class="container-fluid">

		<h1>The Top 10 converted integers</h1>

	</div>

	<!-- Return to homepage -->
	<div class="container-fluid">
	
		<a href="{{ url('/') }}">Go back</a>

	</div>

	<!-- Show top 10 converted integers -->
	<div class="container-fluid">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Integer</th>
					<th>Roman</th>
					<th>Count</th>
				</tr>
					@foreach($top as $t)
						<tr>
							<td>{{$t->integer}}</td>
							<td>{{$t->roman_numeral}}</td>
							<td>{{$t->count}}</td>
						</tr>
    				@endforeach
			</thead>
			
		</table>
	</div>

</body>

</html>