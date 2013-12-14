<!doctype html>
<html lang="en">
<head>
    {{ stylesheet('app.css') }}
</head>
<body>

<div class="container">
	@yield('content')
</div>

{{ HTML::script('js/jquery.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>
