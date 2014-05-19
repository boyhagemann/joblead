<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		{{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}
	</head>
	<body>

	<div id="content">
		@yield('content')
	</div>

	<div id="panel">
		<div id="panel-navigation"></div>
		<div id="panel-content"></div>
	</div>

	</body>
</html>
