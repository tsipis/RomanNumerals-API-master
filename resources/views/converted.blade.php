<!DOCTYPE html>

<html>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<head>
	<title>Roman Numeral Converter</title>
</head>

<body>

	<!-- Show converted number -->
	<div class="container-fluid">

		<h1>The Roman Numeral for {{ $integer }} is {{ $roman }}</h1>

	</div>

	<!-- Return to homepage -->
	<div class="container-fluid">
	
		<a href="{{ url('/') }}">Go back</a>

	</div>

</body>

</html>