 <!-- Fixed navbar -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- <a class="navbar-brand" href="#">Logo</a> -->
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="posts">Blog</a></li>
					<li><a href="/resume">Resume</a></li>
					<li><a href="/portfolio">Projects</a></li>
					<li><a href="#">Contact Me</a></li>
				</ul>
					<ul class="nav navbar-nav navbar-right">
					<li><a href="/signup">Sign Up</a></li>
					<li class="divider-vertical"></li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
						<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
							@include('partials.form_login')
							<div>
								<label style="text-align:center;margin-top:5px">or</label>
							
								<span id="signinButton">
								  <span
								    class="g-signin"
								    data-callback="signinCallback"
								    data-clientid="$_ENV[GOOGLE_CLIENT_ID]"
								    data-cookiepolicy="single_host_origin"
								    data-requestvisibleactions="http://schema.org/AddAction"
								    data-scope="https://www.googleapis.com/auth/plus.login">
								  </span>
								</span>


								<input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav> 