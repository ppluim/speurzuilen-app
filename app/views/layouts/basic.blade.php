<!doctype html>
<html lang="en">
<head>
    {{ google_webfont('Open+Sans') }}
		{{ google_webfont('Amaranth') }}

		{{ stylesheet('bootstrap/bootstrap.css') }}
		{{ stylesheet('redactor/redactor.css') }}
		{{ stylesheet('font-awesome/font-awesome.css') }}
		{{ stylesheet('app.css') }}
		
		{{ HTML::script('js/jquery.min.js') }}
</head>
<body>

<div class="container">
	@yield('content')
</div>

{{ HTML::script('js/jquery.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>
