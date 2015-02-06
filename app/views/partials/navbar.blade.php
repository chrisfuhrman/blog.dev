 <!-- Fixed navbar -->
	<nav class="navbar navbar-default" role="navigation">
		<!-- <div class="container"> -->
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
					<li class="dropdown" id="right-dropdown">

					@if (Auth::check())
						
						<a id="login-in-a" class="dropdown-toggle" href="{{{ action('AuthController@doLogout') }}}">Logout<span id="sign-out"><i class="fa fa-lg fa-sign-out"></i></span></a>
						<span id="logged-user">{{{ Auth::user()->email }}}</span>
			
					@else
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
						<div class="dropdown-menu">
							@include('partials.form_login')
							<div>
								<span id="login-or" class="clear-fix">or</span>

				
						
								<a href="auth/google">
									<img id="google-login" src="/assets/img/google/Red-signin_Long_base_32dp.png">
								</a>

								<a href="auth/google">
									<img id="google-login-hover" src="assets/img/google/Red-signin_Long_press_32dp.png"/>
								</a>



							</div>
						</div>
					@endif
					</li>
				</ul>
			</div>
		<!-- </div> -->
	</nav> 