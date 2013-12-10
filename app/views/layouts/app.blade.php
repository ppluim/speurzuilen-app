<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		
		{{ stylesheet() }}

	</head>
	<body>
		<header class="main-header">
			<div class="external-links">
				<ul class='horizontal'>
					<li><a href="#">Speurzuilen</a></li>
					<li class="pull-right"><a href="#">Van Heekpark</a></li>
				</ul>
			</div>

			<nav class="main-nav">
				<ul class="nav nav-pills nav-pills-justified">
					<li>
						<a href="#" class="main-nav__start">Home</a>
					</li>
					<li class="dropdown">
						<a href="#" class="main-nav__navlist dropdown-toggle" data-toggle="dropdown">Spring naar zuil</a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">

							@foreach ( Page::all() as $page )
								<li>{{ link_to_action('PagesController@show', $page->title, $attributes = array($page->id)) }}</li>
							@endforeach

						</ul>
					</li>
					<li>
						<a href="#" class="main-nav__help">Help</a>
					</li>
				</ul>
			</nav>

			@yield('header')

		</header>

		<section class="page-content">
			<div class="container">

				@if (Session::has('message'))
					<div class="flash alert">
						<p>{{ Session::get('message') }}</p>
					</div>
				@endif

				@yield('main')

			</div>
		</session>
		
		<footer class="page-footer"></footer>
	
		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
	</body>
</html>