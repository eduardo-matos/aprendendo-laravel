<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel</title>
	<style>
		.flash-message { border: 1px dotted #cba; padding: 3px; font-size: 12px;}
	</style>
</head>
<body>

	@if (Session::get('flash_message'))
		<div class="flash-message">
			{{ Session::get('flash_message') }}
		</div>
	@endif

	@yield('content')
</body>
</html>