<!DOCTYPE html>

<html>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<head>
	<title>Roman Numeral Converter</title>
</head>

<body>

	<!-- Show converted number -->
	<div class="container-fluid">

		<h1>The most recently converted integers</h1>

	</div>

	<!-- Return to homepage -->
	<div class="container-fluid">
	
		<a href="{{ url('/') }}">Go back</a>

	</div>

	<!-- Show recently converted numbers -->
	<div class="container-fluid">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Integer</th>
					<th>Roman</th>
					<th>Converted at</th>
				</tr>
					@foreach($recent as $r)
						<tr>
							<td>{{$r->integer}}</td>
							<td>{{$r->roman_numeral}}</td>
							<td>{{$r->converted_at}}</td>
						</tr>
    				@endforeach
			</thead>
			
		</table>
	</div>

</body>

</html>