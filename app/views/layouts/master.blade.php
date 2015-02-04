<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chris Fuhrman's Blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/main.css">
	<script src="https://apis.google.com/js/client:platform.js" async defer></script>
</head>

<style>
text {
  font: 10px sans-serif;
}
</style>
<body>

    @include('partials.navbar')

    <div id="container-main">
    	<div class="container">

			@if (Session::has('errorMessage'))
			    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
			@endif

			@if (Session::has('successMessage'))
    			<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
			@endif

    		@yield('content')	

    	</div>
	</div>

	<!-- Main Footer -->
	<section id="footer-main">
		<div class="container">
			<div class="row">

				<div class="col-sm-3 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					<h4 class="footer-header">Header 1</h4>

				</div>

				<div class="col-sm-3 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					<h4>Header 2</h4>

				</div>

				<div class="col-sm-3 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					<h4>Header 3</h4>

				</div>

				<div class="col-sm-3 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					<h4>Header 4</h4>

				</div>

			</div>
		</div>
	</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script>
(function() {
	//Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
})();

</script>


</body>
</html>