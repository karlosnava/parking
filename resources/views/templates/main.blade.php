<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title') GEMA SAS</title>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@yield('css')
</head>
<body class="bg-gray-100">
	@include('partials.nav')

	@yield('content')

	@yield('js')
</body>
</html>
