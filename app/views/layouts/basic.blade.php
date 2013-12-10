<!doctype html>
<html lang="en">
<head>
    {{ stylesheet('app.css') }}
</head>
<body>
<div class="row">
	<div class="col-md-12 well">
		<h1>Login</h1>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<ul class="nav nav-list well">
			@if(Auth::user())
			<li class="nav-header">{{ ucwords(Auth::user()->username) }}</li>
			<li> {{ HTML::link('users', 'View Users') }}</li>
			<li> {{ HTML::link('logout', 'Logout') }}</li>
			@else
			<li> {{ HTML::link('login', 'Login') }}</li>
			@endif
		</ul>
	</div>
	<div class="col-md-9">
		@yield('content')
	</div>
</div>
{{ HTML::script('js/jquery.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>
