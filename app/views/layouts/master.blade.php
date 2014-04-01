<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My Blog: Karina Montes</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!--Font Awesome-->
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<!--Google fonts-->
		<link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
		<link href="/css/index.css" rel="stylesheet">
		<link href="/css/signin.css" rel="stylesheet">
		@yield('topscript')
<body> 

		<div class="container">

			<!-- Static navbar -->
			<div class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="{{{ action('HomeController@showHome') }}}">Karina Montes</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class ="#"><a href="#">About Me</a></li>
							<li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
							<li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
							<li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
							<li><a href="{{{ action('HomeController@showContact') }}}">Contact Me</a></li>
							@if (Auth::check())
								<li><a href="{{{ action('HomeController@logout') }}}">Log Out</a></li>
							@else
								<li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
							@endif
						</ul>
						<ul class="nav navbar-nav navbar-right">
						 <li><a href="http://www.linkedin.com/in/karinamontestrevino"><i class="fa fa-linkedin"></i></a></li> 
						 <li><a href="https://github.com/KarinaMontesTrevino"><i class="fa fa-github-alt"></i></a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div><!--/.container-fluid -->
			</div>

				@if (Session::has('successMessage'))
						<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
				@endif
				@if (Session::has('errorMessage'))
						<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
				@endif 
			
		@yield('content')  
 <nav class="footer">  
		<div>
		<!-- FOOTER -->
			<footer class="footer">
				<!-- <p class="pull-right"><a href="#">Back to top</a></p> -->
				<p>&copy; 2014 Karina Montes-Trevino <span class="pull-right"><a href="#">Back to top</a></span></p>
			</footer>
		</div>
 </nav>
</div> <!-- /container -->
		<link href="/js/jquery.js">
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>     
		@yield('bottom-script')
</body>
</html>