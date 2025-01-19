<html>
	<head>
	<link href="https://fonts.cdnfonts.com/css/lemon-milk" rel="stylesheet" type='text/css'>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body>
		@yield('content')
		<footer>	
			@include('includes.footer')
		</footer>
	</body>
</html>