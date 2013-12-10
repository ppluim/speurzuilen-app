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
						{{ link_to_route('start', 'Start', null, array('class'=>'main-nav__start')) }}
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
						{{ link_to_route('help', 'Help', null, array('class'=>'main-nav__help')) }}
					</li>
				</ul>
			</nav>

			@yield('header')

		</header>

		<section class="page-content">
			<div class="container">

				@yield('main')

			</div>
		</session>
		
		<footer class="page-footer"></footer>
	
		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
	</body>
</html>