<html>
<head>
	<title>Cloud9 Computing</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- SASS user stylesheet using gulp-autoprefixer and gulp-minify-css CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">



</head>
<body>

	@yield('top-banner')

	@include('layouts.partials.nav')

	@yield('content')



	<!-- JQuery -->
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<!--  jquery script-->
	<script src="js/main.js"></script>

</body>
</html>