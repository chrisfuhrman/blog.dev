<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chris Fuhrman's Blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/css/main.css">
	<!-- Google Oauth -->
	<script src="https://apis.google.com/js/client:platform.js" async defer></script>

</head>

<style>

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

	// Change google sign in btn on hover

	var img = $('#google-login');

	img.on('mouseenter', function() {
		$(this).hide()
			$('#google-login-hover').show();

	});
	
	$('#google-login-hover').on('mouseout', function() {
		$(this).hide()
			img.show();
	});

		
})();

	
</script>




</body>
</html>